<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;

class ProductController extends Controller
{
    public function index()
    {
        if (request()->category) {
            $paginate = 12;
            $content['products'] = product::select('product.id', 'product.name', 'product.slug', 'product.image', 'product.short_description', 'product.hover_image', 'product.price_reg', 'product.price_dis', 'product.price_dis_start', 'product.price_dis_end', 'product.status')->where('sub_category_id', function ($query) {
                $query->select('id')->from('sub_category')->where('slug', request()->category);
            });
            $content['categoryId'] = \App\models\category::select('id')->where('id', function ($query) {
                $query->select('category_id')->from('sub_category')->where('slug', request()->category);
            })->first()->id;
            $content['new'] = product::select('name', 'image', 'price_reg', 'price_dis', 'price_dis_start', 'price_dis_end', 'slug', 'status')->where('sub_category_id', function ($query) {
                $query->select('id')->from('sub_category')->where('slug', request()->category);
            })->orderBy('id', 'desc')->limit(6)->get()->all();

            if (\request()->sort == 'low_high') {
                $content['products'] = $content['products']->orderBy('price_reg')->paginate($paginate);
            } elseif (\request()->sort == 'high_low') {
                $content['products'] = $content['products']->orderBy('price_reg','desc')->paginate($paginate);
            } elseif (request()->variant) {
                $content['products'] = $content['products']->join('product_variant as pv','pv.product_id','=','product.id')->where('pv.variant_id',request()->variant)->paginate($paginate);
            } else {
                $content['products'] = $content['products']->orderBy('id','desc')->paginate($paginate);
            }
        }
        $product = new product;
        $content['variants'] = $product->getVariant();
        return view('front.shop')->with($content);
    }

    public function show()
    {
        if (request()->product) {
            $content['product'] = product::select('id','name', 'short_description', 'description', 'slug', 'image', 'multi_image', 'hover_image', 'price_reg', 'price_dis', 'price_dis_start', 'price_dis_end', 'status')->where('slug', request()->product)->firstOrFail();
            $content['new'] = product::select('name', 'image', 'price_reg', 'price_dis', 'price_dis_start', 'price_dis_end', 'slug', 'status')
                ->where('slug', '<>', request()->product)->where('sub_category_id', function ($query) {
                    $query->select('sub_category_id')->from('product')->where('slug', request()->product);
                })->orderBy('id', 'desc')->limit(6)->get()->all();
            $content['related'] = product::select('id', 'sub_category_id', 'name', 'short_description', 'image', 'hover_image', 'price_reg', 'price_dis', 'price_dis_start', 'price_dis_end', 'slug', 'status')
                ->where('slug', '<>', request()->product)->where('sub_category_id', function ($query) {
                    $query->select('sub_category_id')->from('product')->where('slug', request()->product);
                })->mightAlsoLike()->get()->all();
            $product = new product;
            $content['variants'] = $product->getVariant(\request()->product);
            return view('front.product')->with($content);
        }
    }

    public function variant() {
        if (\request()->id) {
            $record = \DB::table('product_variant')->select('variant_price')->where(['variant_id' => \request()->id],['product_id' => \request()->product_id])->first();
            return response()->json($record);
        }
    }
}

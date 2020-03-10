<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
    protected $table = 'attribute';
    public $timestamps = true;

    public function getAttributeId($id) {
        return \DB::table('attribute_sub_category')->select('attribute_id')->where('id',$id)->first()->attribute_id;
    }

    public function deleteAttributeSubCategory($id) {
        return \DB::table('attribute_sub_category')->where('id',$id)->delete();
    }

    public function deleteAttribute($attribute_id) {
        return attribute::whereNotIn('id',function ($query){
            $query->select('attribute_id')->distinct()->from('attribute_sub_category');
        })->where('id',$attribute_id)->delete();
    }

    public function catId($id) {
        return \DB::table('attribute_sub_category')->select('sub_category_id')->where('attribute_id',$id)->get()->all();
    }

    public function getAttributess() {
        return attribute::select('id','name')->where('status',TRUE)->get()->all();
    }

    public function sub_category() {
        return $this->belongsToMany('App\models\sub_category');
    }
}

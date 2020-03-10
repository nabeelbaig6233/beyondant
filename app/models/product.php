<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    public $timestamps = TRUE;

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(10);
    }

    public function getVariant($where = "") {
        $query = \DB::table('product_variant as pv')->select('a.id as aid', 'a.name as aname', 'v.id as vid', 'v.name as vname', 'pv.variant_price')
            ->leftJoin('variant as v', 'v.id', '=', 'pv.variant_id')
            ->leftJoin('product as p', 'p.id', '=', 'pv.product_id')
            ->leftJoin('attribute as a', 'a.id', '=', 'v.attribute_id');
        if (!empty($where)) {
            $query = $query->where('slug', $where)->groupBy('pv.variant_id')->get()->all();
        } else {
            $query = $query->groupBy('pv.variant_id')->get()->all();
        }
        return $query;
    }
}

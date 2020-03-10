<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    protected $table = 'sub_category';
    public $timestamps = true;

    public function getSubCategory($id = "") {
        $query = \DB::table('sub_category')->select('id','name');
        if ($id) {
            $query = $query->where('category_id',$id)->get()->all();
        }
        else{
            $query = $query->where('status',TRUE)->get()->all();
        }
        return $query;
    }

    public function attribute() {
        return $this->belongsToMany('App\models\attribute');
    }

}

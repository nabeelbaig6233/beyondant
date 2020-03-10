<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    public $timestamps = true;

    public function getCategory() {
        return \DB::table('category')->select('id','name')->where('status',TRUE)->get()->toArray();
    }
}

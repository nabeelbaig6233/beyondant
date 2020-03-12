<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'roles';
    public $timestamps = true;
    public function getRole() {
        return \DB::table('roles')->select('id','name')->whereNotIn('id',[2,4])->where('status',TRUE)->get()->toArray();
    }
}

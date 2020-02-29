<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'roles';
    public $timestamps = true;
    public function getRole() {
        return \DB::table('roles')->select('id','name')->where('status',TRUE)->get()->toArray();
    }
}

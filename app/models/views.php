<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class views extends Model
{
    protected $table='profile_views';
    protected $fillable=['path','views_count','google_dated'];
}

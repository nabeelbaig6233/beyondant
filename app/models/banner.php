<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table="banners";
    protected $fillable=["image_url","link"];
}

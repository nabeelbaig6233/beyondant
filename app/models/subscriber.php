<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class subscriber extends Model
{
    protected $table="subscribers";
    protected $fillable=["email"];
}

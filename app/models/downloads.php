<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class downloads extends Model
{
    protected $table="profile_downloads";
    protected $fillable=['user_id'];
}

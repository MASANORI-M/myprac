<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public function image()
    {
        return $this->hasMany('App\Models\Image');
    }
}

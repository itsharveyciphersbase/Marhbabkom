<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $fillable = ['name','address','phone','email','facebook','twitter','instagram','isverifed'];
}
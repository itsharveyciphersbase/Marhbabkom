<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['service_id','service_provider_id','name','price','address','desc','transportation','guidance','food','laggage'];
}
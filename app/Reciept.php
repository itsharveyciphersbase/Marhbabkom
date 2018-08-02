<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reciept extends Model
{
    protected $fillable = ['user_id','service_provider_id','price','status','payment_method'];
}
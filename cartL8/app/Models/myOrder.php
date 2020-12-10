<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myOrder extends Model
{
    use HasFactory;

    protected $fillable=['userID','amount','paymentStatus'];

    public function product(){

        return $this->hasMany('App\Product');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}

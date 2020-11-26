<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['name','description','price','image','quantity','categoryID'];  // enable use upadate the field

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}

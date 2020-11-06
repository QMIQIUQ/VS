<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //set protacted fillable means we able to update the fields inside the table
    //data can only accessable if mentioned else will be restrected by laravel
    protected $fillable=['name','description','price','image','quantity','categoryID'];
    
    public function category(){

        //add "belongsTo" to set releationship with ("App\"php_name")
        return $this->belongsTo('App\Category');

    }

}

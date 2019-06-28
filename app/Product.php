<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'category_id'];


   

    public function user()
    {
        return $this->hasMany('App\Category', 'category_id');
    }
}


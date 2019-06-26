<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesProperties extends Model
{
    protected $table = "categories_properties";
    protected $fillable = [
        'category_id', 'property_id',
    ];
}

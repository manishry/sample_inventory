<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductProperties extends Model
{
    protected $table = "products_properties";
    protected $fillable = [
         'label', 'value', 'product_id',
    ];
}

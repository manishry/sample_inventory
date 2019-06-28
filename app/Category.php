<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = [
        'name'
    ];
    public function comments()
    {
        return $this->belongsTo('App\Product','category_id');
    }
 
}

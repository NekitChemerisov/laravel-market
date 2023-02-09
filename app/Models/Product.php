<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name','discription', 'price', 'category_id'];

    public function Products(){
        return $this->hasMany('App\Category', 'category_id');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    protected $guarded = [];
    // get the product of category
    public function product(){
        return $this->hasManyThrough(Product::Class);
    }
}

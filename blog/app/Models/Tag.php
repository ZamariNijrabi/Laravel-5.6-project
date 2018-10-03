<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded =[];

    // the product of Tag
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    protected $guarded =[];

// get the companies of this category
    public function companies(){
        return $this->hasMany(Company::class);
    }
}

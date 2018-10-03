<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded =[];

    //get the companies of province
    public function  companies(){
        return $this->hasMany(Company::Class);
    }
}

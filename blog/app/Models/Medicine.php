<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Medicine extends Model
{
    //
    protected $guarded =[];
//    the below function get the medicine orders
    public function orders(){
        return $this->belongsToMany(Order::class);
    }


}

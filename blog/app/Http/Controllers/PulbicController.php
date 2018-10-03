<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PulbicController extends Controller
{
    // get the public pages
  public function PublicPages(){
      return view('public-pages.welcome');
  }
}

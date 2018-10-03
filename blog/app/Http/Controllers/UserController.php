<?php

namespace App\Http\Controllers;
use App\Contract\Repositories\User\UserRepository as Users;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $user;

    public function __construct(Users $user){
        $this->user = $user;
    }

    public function index(){
        // return $this->user->all();
        $users = $this->user->all();
        //first way to return the data to viwe 
        // return view ('user.user',compact('users'));
        // the second way to return the data to view 
        // return view ('user.user')->with(['users'=>$users]);
        //the thrid way 
        return view ('user.user',['users'=>$users]);

    }

    public function show($id){
      return $this->user->show($id);
    }
}

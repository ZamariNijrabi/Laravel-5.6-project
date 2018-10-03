<?php

namespace App\Http\Controllers;
use App\Contract\Repositories\User\UserRepository as User;
use Illuminate\Http\Request;

class UserServicesController extends Controller
{
    //
    protected $user;

    public function __construct(User $user){
        $this->User = $user;
    }

    public function index(){
        return $user->all();
    }

}

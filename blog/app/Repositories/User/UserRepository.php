<?php 
namespace App\Repositories\User;
use App\Contract\Repositories\User\UserRepository as Contract;

Use App\User;
class UserRepository implements Contract
{

    /*
    *{@inheritdoc}
    *
    */
    public function all(){
        $users = User::all();

        return $users;
    }
        
    /*
    *{@inheritdoc}
    *
    */
    public function show($id){
        $user = User::find($id);

        return $user;

    }
    
    /*
    *{@inheritdoc}
    *
    */

    public function store($request){
        return 'The user stored';
    }
}
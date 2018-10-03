<?php 


namespace App\Contract\Repositories\User;
use App\User;
interface UserRepository{

    //funtion to show all users
    public function all();

    // funcion  to show  a user

    public function show($id);

    // function to store the new User 

    public function store($request);
    
}
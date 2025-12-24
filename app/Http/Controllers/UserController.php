<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view("User.index",compact("users"));
    }
    public function create(){
        return view("User.create");
    }
    public function store(StoreUser $request){
        $user = User::create($request->all());
        return redirect()->route('user.index');
    }











    public function edit($user){
       $user= User::find($user);
       return view("User.edit",compact("user"));
    }
    public function update(Request $request, $user){
        
    User::find($user)->update($request->all());

            
             return redirect()->route('user.index');
    }
    public function destroy($user){
        User::find($user)->delete();
        return redirect()->route('user.index');

    }
}

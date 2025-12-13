<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view("test",compact("users"));
    }
    public function create(){
        return view("create");
    }
    public function store(StoreUser $request){
        $user = User::create($request->all());
    }
}

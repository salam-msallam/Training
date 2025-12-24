<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            'phone'=>$request->phone
        ]);
    }
}

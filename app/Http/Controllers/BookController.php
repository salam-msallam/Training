<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(User $user){
        $user->books()->create();
        
    }

    public function index(User $user){
        return $user->load('books');

    }
}

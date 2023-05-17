<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function addUser(){
        $users = User::get();
        return view('users', ["users" => $users]);

    }
}

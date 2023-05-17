<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function post(){
       return view('add_post');
   }
    public function create(Request $request){
        dd();
        Post::create($request->all());
    }
}

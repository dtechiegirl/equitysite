<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class EquityController extends Controller
{
    //
    public function index(){
        $post = Post::orderBy('updated_at', 'DESC')->get();
        
        return view('index', ['posts' => $post]);
    }

    public function about(){
        // $post = Blog::orderBy('updated_at', 'DESC')->get();
        
        return view('about');
    }
}

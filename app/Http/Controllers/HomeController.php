<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $posts = Post::all();

        return view('Home.home',compact('posts'));
    }

    public function product(){
        $posts = Post::all();
        $images = Image::with('post')->get();
        return view('Home.product',compact('posts','images'));
    }
}

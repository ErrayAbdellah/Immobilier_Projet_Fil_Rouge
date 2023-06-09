<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usersShow(){
        $users = User::all();
        
         return view('admin.users', compact('users')); 
    }

    public function changeRole(Request $request){
        
        if($request->idRole == 1){
            $dataid = 2 ;
        }
        else if($request->idRole == 2){
            $dataid = 1 ;
        }

        User::find($request->id)->update([
            'role_id'=> $dataid,
        ]);

        return response()->json([
            'status'=>'200',
            'message'=>'nady '.$request->id,
        ]);
    }

    public function postsShow(){
        $posts = Post::with('user')->where('report','=','1')->get();
       return view('admin.posts',compact('posts'));
    }
    public function productAdmin(){
        
        $posts = Post::with('user')->get();
        return view('admin.product',compact('posts'));
        // return view('admin.product');
    }
}

<?php

namespace App\Http\Controllers;

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
            
        }
        return response()->json([
            'status'=>'200',
            'message'=>'nady '.$request->idRole,
        ]);
    }
}

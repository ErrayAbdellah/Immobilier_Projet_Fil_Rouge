<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        // dd();
        //count post
        $posts = DB::select(
            "SELECT count(*) as 'posts' from posts "
        );
        
        //count posts by buy
        $postsBuy = DB::select(
            "SELECT count(*) as 'posts' from posts where buyOrRent = 1 "
        );
        
        //count posts by rent 
        $postsRent = DB::select(
            "SELECT count(*) as 'posts' from posts where buyOrRent = 2 "
        );

        // count users
        $users = DB::select(
            "SELECT count(*) as 'users' from users"
        );
        
        // count rank users post
        $rankUserPost = DB::select(
            "SELECT COUNT(p.id) AS post_count, u.id, u.name , u.email ,u.profile_photo_path
            FROM users u
            INNER JOIN posts p ON u.id = p.user_id
            GROUP BY u.id, u.name , u.email ,u.profile_photo_path
            HAVING COUNT(p.id) > 0 
            ORDER by post_count DESC LIMIT 3"
        );

        // count user post
        $userPost = DB::select(
            "SELECT  COUNT(DISTINCT  u.id) as userPost from users u INNER join posts p on u.id = p.user_id
             WHERE p.user_id = u.id "
        );
        // dd('hih');
        // dd($rankUserPost);
        return view('admin.dashboard',compact('posts','postsBuy','postsRent','users','rankUserPost','userPost'));
    }
}

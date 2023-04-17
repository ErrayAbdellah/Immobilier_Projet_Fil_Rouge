<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Outdoorfeature;
use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        $images=array();
        // foreach ($posts  as $post) {
            $images = Image::with('post')->get();
            
        // }
        // dd($images);
        return view('Home.home',compact('posts','images'));
    }

    public function product(){
        $posts = Post::with('images','type','outdoorfeature')->get();

        // $posts = Post::all();
            // dd($posts);
            // $images = Image::with('post')->get();
            $types = Type::all();
            $outdoorFeatures = Outdoorfeature::all();

        return view('Home.product',compact('posts','types','outdoorFeatures'));
    }


    public function filterPost(Request $request)
    {
    // Retrieve all posts
        $query = Post::query();

        // Filter by Property Type
        if ($request->has('Filterpost_type')) {
            $query->where('type_id', $request->input('Filterpost_type'));
            
        }

        // Filter by Price Range
        if ($request->has('filterMinPrice')) {
            $query->where('price', '>=', $request->input('filterMinPrice'));
        }
        if ($request->has('filterMaxPrice')) {
            $query->where('price', '<=', $request->input('filterMaxPrice'));
        }

        // Filter by Bedrooms
        if ($request->has('filterNumBedrooms')) {
            $query->where('Bedrooms', $request->input('filterNumBedrooms'));
        }

        // Filter by Outdoor Features
        // if ($request->has('filterOutdoor_features')) {
        //     $outdoorFeatureIds = $request->input('filterOutdoor_features');
        //     $query->whereHas('outdoorfeature', function ($query) use ($outdoorFeatureIds) {
        //         $query->whereIn('outdoorfeature_id', $outdoorFeatureIds);
        //     });
        // }

        $posts = $query->get();
        

        $images = Image::with('post')->get();
            $types = Type::all();
            $outdoorFeatures = Outdoorfeature::all();
        return view('Home.product', compact('posts','images','types','outdoorFeatures'));

    }

    public function createBuypage(Request $request, $id){

        $post = Post::with('type','outdoorfeature')->where('id','=',$id)->get()->first();
        // dd($post);
        $images = Image::with('post')->where('post_id','=',$id)->get();
        $comments = Comment::with('post')->where('post_id','=',$id)->get();
        $users = User::with('comment')->get();
        // dd($users);
        // $types = Type::all();
        $outdoorFeatures = Outdoorfeature::all();
        return view('Home.buy-page',compact('post','images','outdoorFeatures','comments','users'));
    }
}

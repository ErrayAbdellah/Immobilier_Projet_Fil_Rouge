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

            $posts = Post::with('images')->get();
            $types = Type::all();
            $outdoorFeatures = Outdoorfeature::all();
            
        return view('Home.home',compact('posts','types','outdoorFeatures'));
    }

    public function product(){
        $posts = Post::with('images','type','outdoorfeature')->get();
        
            $types = Type::all();
            $outdoorFeatures = Outdoorfeature::all();

        return view('Home.product',compact('posts','types','outdoorFeatures'));
    }


    public function filterPost(Request $request)
    {
        $query = Post::query();
                
        // Filter by property type
        if (!is_null($request['Filterpost_type'])) {
            $query->where('type_id', $request['Filterpost_type']);
        }
        
        // Filter by price range
        if (!is_null($request['filterMinPrice'])) {
            $query->where('price', '>=', $request['filterMinPrice']);
        }
        // dd($query->get());
        if (!is_null($request['filterMaxPrice'])) {
            $query->where('price', '<=', $request['filterMaxPrice']);
        }
    
        // Filter by number of bedrooms
        if (!is_null($request['filterNumBedrooms'])) {
            $query->where('Bedrooms', $request['filterNumBedrooms']);
        }
    
        // Filter by outdoor features
        if (!is_null($request['filterOutdoor_features'])) {
            $outdoorFeatures = $request['filterOutdoor_features'];
            $query->whereHas('outdoorfeature', function ($q) use ($outdoorFeatures) {
                $q->whereIn('outdoorfeature_id', $outdoorFeatures);
            });
        }
    
        $posts = $query->get();
        $types = Type::all();
        $outdoorFeatures = Outdoorfeature::all();

        return view('Home.product', compact('posts','types','outdoorFeatures'));

    }

    public function createBuypage(Request $request, $id){

        $post = Post::with('type','outdoorfeature')->where('id','=',$id)->get()->first();
        
        $images = Image::with('post')->where('post_id','=',$id)->get();
        $comments = Comment::with('post')->where('post_id','=',$id)->get();
        $users = User::with('comment')->get();
        
        $outdoorFeatures = Outdoorfeature::all();
        return view('Home.buy-page',compact('post','images','outdoorFeatures','comments','users'));
    }
}

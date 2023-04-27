<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Outdoorfeature;
use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
        if ($request->Filterpost_type && $request->Filterpost_type !== 'Choose a type') {
            
            $query->where('type_id', $request->Filterpost_type);
        }
        
        // Filter by price range
        if ($request->filterMinPrice) {
            $query->where('price', '>=', $request->filterMinPrice);
        }
        
        if ($request->filterMaxPrice) {
            $query->where('price', '<=', $request->filterMaxPrice);
        }
    
        // Filter by number of bedrooms
        if ($request->filterNumBedrooms) {
            $query->where('Bedrooms', $request->filterNumBedrooms);
        }
    
        // Filter by outdoor features
        if ($request->filterOutdoor_features) {
            $outdoorFeatures = $request->filterOutdoor_features;
            $query->whereHas('outdoorfeature', function ($q) use ($outdoorFeatures) {
                $q->whereIn('outdoorfeature_id', $outdoorFeatures);
            });
        }
    
        $posts = $query->get();
        // dd($posts);

        $types = Type::all();
        $outdoorFeatures = Outdoorfeature::all();
        return view('Home.product', compact('posts','types','outdoorFeatures'));

    }

    public function createBuypage(Request $request, $id){

        $post = Post::with('type','outdoorfeature','user')->where('id','=',$id)->get()->first();
        
        $images = Image::with('post')->where('post_id','=',$id)->get();
        $comments = Comment::with('post')->where('post_id','=',$id)->get();
        $users = User::with('comment')->get();
        
        $outdoorFeatures = Outdoorfeature::all();
        return view('Home.buy-page',compact('post','images','outdoorFeatures','comments','users'));
    }

    public function messageSend(Request $request){
        $mailData = [
            'title' => 'Mail from '.$request->email,
            'body' => $request->message
        ];
         
        Mail::to('your_email@gmail.com')->send(new DemoMail($mailData));
           
        return back()->with(['success'=> 'Email is sent successfully.']);
    }

    public function myProfile($id){
        
        // $breeds = Http::get('https://countriesnow.space/api/v0.1/countries');

        // if ($breeds->ok()) {
        //     $data = $breeds->json();
        //     dd($data);
        //     // Process the data array/object
        // } else {
        //    dd("HTTP error: " . $breeds->status());
        // }


        $user = User::with('posts')->find($id);
        $commentCount = Comment::with('user')->where('user_id',$user->id)->count();
        $postsCount = Post::with('user')->where('user_id',$user->id)->count();
        
        return view('Home.myProfile',compact('user','commentCount','postsCount'));
    }
}

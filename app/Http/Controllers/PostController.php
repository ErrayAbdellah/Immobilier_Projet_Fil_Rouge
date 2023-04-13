<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Outdoorfeature;
use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('add-Post');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $outdoorFeature = Outdoorfeature::all();
        return view('add-Post',['outdoorFeatures' => $outdoorFeature,'types'=>$types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|',
            'description' => 'required',
            'post_type' => 'required',
            'Bedrooms' => 'required',
            'space' => 'required',
            'price' => 'required',
            'outdoor_features' => 'array', 
        ]);

        $post = new Post();
        
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->Bedrooms = $validatedData['Bedrooms'];
        $post->space = $validatedData['space'];
        $post->price = $validatedData['price'];
        $post->type_id = $validatedData['post_type'];
        $post->user_id =1;
        $post->save();
        
        $post->outdoorfeature()->sync($validatedData['outdoor_features']);
        

        
        
        $images = $request->file('images');
        foreach ($images as $image) {
            $filename = $image->getClientOriginalName();
            $path = $image->store('images'); // assuming you want to store the images in the public/images directory
            
            Image::create([
                'filename' => $filename,
                'path' => $path,
                'post_id'=> $post->id,
            ]);
        }

        return redirect()->route('post.create')->with('success', 'Post created successfully!');
        // return redirect()->back()->with('success', 'Images uploaded successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $post = Post::find($id); 
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404); 

            return redirect()->back()->with('error', 'Post not found'); 
        }
        $types = Type::all(); 
        $outdoorFeatures = OutdoorFeature::all(); 

        return view('update-poste', compact('post', 'types', 'outdoorFeatures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'post_type' => 'required',
            'outdoor_features' => 'array', 
        ]);
    
        $post = Post::find($id); 
    
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404); 

            return redirect()->back()->with('error', 'Post not found'); 
        }
    
        // Update the post attributes
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->type_id = $validatedData['post_type'];
        $post->save();
    
        // Sync the outdoor features
        $post->outdoorfeature()->sync($validatedData['outdoor_features']);
    
        return redirect()->route('post.edit', $id)->with('success', 'Post updated successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id); 

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404); 
        }
        
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']); 
    }
}

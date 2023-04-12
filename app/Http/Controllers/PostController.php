<?php

namespace App\Http\Controllers;

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
            'outdoor_features' => 'array', // Assuming outdoor_features is an array of checkbox values
        ]);

        $post = new Post();
        
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->type_id = $validatedData['post_type'];
        $post->user_id =1;
        $post->save();
        
        $post->outdoorfeature()->sync($validatedData['outdoor_features']);
        

        return redirect()->route('post.create')->with('success', 'Post created successfully!');
        
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
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}

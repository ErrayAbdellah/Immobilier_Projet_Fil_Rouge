<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Outdoorfeature;
use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $outdoorFeatures = Outdoorfeature::all();
        // dd('nady');
        return view('Home.add-Post',compact('types','outdoorFeatures'));
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
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_' . Str::random(10) . '.' . $extension;
            // dd($filename);
            $path = $image->store('images'); 
            
            try{
                Image::create([
                    'filename' => $filename,
                    'path' => $path,
                    'post_id'=> $post->id,
                ]);
                $image->move(public_path('image_post'),$filename);

            }catch(Exception $e){
                return back()->withError('Failed to upload images.')->withInput();
            }
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
        $images = Image::get()->where('post_id','=',$post->id);
        // dd($images);
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404); 

            return redirect()->back()->with('error', 'Post not found'); 
        }
        $types = Type::all(); 
        $outdoorFeatures = OutdoorFeature::all(); 

        return view('update-poste', compact('post', 'types', 'outdoorFeatures','images'));
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
            'Bedrooms' => 'required',
            'space' => 'required',
            'price' => 'required',
            'outdoor_features' => 'array', 
        ]);
    
        $post = Post::findOrFail($id); 
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->Bedrooms = $validatedData['Bedrooms'];
        $post->space = $validatedData['space'];
        $post->price = $validatedData['price'];
        $post->type_id = $validatedData['post_type'];
        
        
        $post->outdoorfeature()->sync($validatedData['outdoor_features']); 
        
        $post->save();

        $images = $request->file('images');
        foreach ($images as $image) {
            $filename = $image->getClientOriginalName();
            $path = $image->store('images'); 
            $image->move(public_path('image_post'),$filename);
            
            Image::create([
                'filename' => $filename,
                'path' => $path,
                'post_id'=> $post->id,
            ]);
        }
    
        return redirect()->route('post.edit', $post->id)->with('success', 'Post updated successfully!');
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

    public function destroyImage(Request $request)
    {
        $image = Image::find($request->image_id); 

        if (!$image) {
            return response()->json([
                'status'=>'200',
                'message'=>'image not found',
               ]);
        }
        try{
            $image->delete();
            return response()->json([
                'status'=>'200',
                'message'=>'Post deleted successfully',
            ]);
        }catch(Exception $e){
            return response()->json([
                'status'=>'200',
                'message'=>$e->getMessage(),
            ]);
        }
        
    }
}
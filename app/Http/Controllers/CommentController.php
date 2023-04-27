<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Outdoorfeature;
use App\Models\Post;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->commentPost,$request->idPostComment);
        $validatRequest = $request->validate([
            'commentPost' => 'required',
            'idPostComment'=> 'required'
        ]);

        $comment = new Comment();

       try{
        $comment->description = $validatRequest['commentPost'];
        $comment->post_id = $validatRequest['idPostComment'];
        $comment->like = 0;
        $comment->user_id =Auth::user()->id;

        $comment->save();
        // return HomeController->createBuypage();
        $post = Post::with('type','outdoorfeature','user')->where('id','=',$validatRequest['idPostComment'])->get()->first();
        
        $images = Image::with('post')->where('post_id','=',$validatRequest['idPostComment'])->get();
        $comments = Comment::with('post')->where('post_id','=',$validatRequest['idPostComment'])->get();
        $users = User::with('comment')->get();
        
        $outdoorFeatures = Outdoorfeature::all();

        return redirect()->route('Home.buy-page',compact('post','images','outdoorFeatures','comments','users'))->with('success', 'Post deleted successfully!');

        // return view('Home.buy-page',compact('post','images','outdoorFeatures','comments','users'));
       }catch(Exception $e){
        // dd( $e->getMessage());
        return redirect()->back()->with('error', $e->getMessage()); 
       }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        
        $comment = Comment::find($comment->id); 
        if (!$comment) {
            return response()->json(['error' => 'comment not found'], 404); 
        }
        
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully!');
    }
}

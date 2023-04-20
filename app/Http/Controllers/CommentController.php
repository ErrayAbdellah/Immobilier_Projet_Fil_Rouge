<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Exception;
use Illuminate\Http\Request;
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
        $comment->like = 1;
        $comment->user_id = 2;

        $comment->save();
        
       }catch(Exception $e){
        dd( $e->getMessage());
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
        // dd($comment);
        $comment = Comment::find($comment->id); 
        if (!$comment) {
            return response()->json(['error' => 'comment not found'], 404); 
        }
        
        $comment->delete();

        return ``;
        // return response()->json(['message' => 'comment deleted successfully']); 
    }
}

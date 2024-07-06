<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    function comment(Request $request){

      
        $savecomment = new Comment();
        $savecomment->user_id=auth()->user()->id;
        $savecomment->Post_id=$request->post_id;
        $savecomment->parent_id=$request->perent_id ?? null;
        $savecomment->contant=$request->contant;
        $savecomment->save();
        return back();

    }

    function searchinput(Request $request){
       $value = $request->search;
       $post=Post::where('title','Like','%'.$value.'%')->take(2)->select('id','title','slug')->get();
       if(count($post)>0){
        return $post;
       }else{
        return response('Data not found',404);
       }
       
    }
}

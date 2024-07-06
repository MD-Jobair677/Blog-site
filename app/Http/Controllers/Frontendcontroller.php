<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\SubCategory;
use PhpParser\Comment;
use App\Models\category;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    function homepage(){
        $populerposts = Post::with(['category:id,title,slug','user'])
        -> with('SubCategory')->latest()
        ->select('id','slug','user_id','category_id','sub_category_id','future_img', 'contant', 'is_populer','title','created_at')->where('is_populer',1)->get();
        // dd($populerposts);


        $posts = post::with(['category:id,title,slug','user:id,name,imgename'])->latest()->paginate(10);
        // dd($posts);
        return view('frontendlayout.home',compact('populerposts','posts'));
    }

    function getPostbycategory($slug){
    $posts = post::whereHas('category', function($q) use($slug){
        $q->where('slug',$slug);
    })->
    
    orWhereHas('SubCategory', function($q) use($slug){
        $q->where('slug', $slug);
    })->
    get();
    // dd($posts); //class-15
    }




    

    function singleblog($slug){

             $post = Post::withCount('comments as totalcomments')
             ->with('Comments')


        ->with(['user:id,name,imgename,created_at','category:id,title,slug'])->where('slug',$slug)->first();

        // $post = Post::with('Comments')->get();
         $populerposts = category::withcount('posts as totalpost')->latest()->take(6)->get();
        // dd($post);


       
        // dd($populerposts);
        return view('singleblog', compact('post','populerposts'));
    }

  
}

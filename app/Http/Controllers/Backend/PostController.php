<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Helpers\sluggenarator;
use App\Http\Controllers\Controller;
use App\Http\singlemidea\uploadmidea;

class PostController extends Controller
{   
    use sluggenarator, uploadmidea; //name of trait
    function addpost(){
        $categores = category::latest()->get();
        $subcategoris = SubCategory::latest()->get();
        return view('post.post',compact('categores','subcategoris'));
    }

    function storepost(Request $request){

        $request->validate([
            'title' =>'required|string|max:30',
            'postimg' =>'required',
            'category'=>'required',
            'subcategory'=>'required',
            'contant'=>'required|string|max:500',


        ],
        [
            'title'=>[
                'required'=>'please Enter your title',
                'string'=>'please enter string valu',
                'max'=>'You must type 30 carector',
            ],

            'postimg' =>[
                'required'=>'please select only one img',
                'mimes'=>'Image type pdf,doc,docx,jpg,png'


            ],
            'contant'=>[
                'required'=>'please Enter your title',
                'string'=>'please enter string valu',
                'max'=>'You must type 500 carector',
                

            ],

        ]);




     $title = $this->genaratslug($request->title, post::class);
     $midea = $request->postimg;
     $folder = 'postimg';
     $path = 'public';
    $filename= $this->uploadpost($title,$midea,$folder,$path);

     $post=new Post();
     $post->title = $request->title;
     $post->slug=$title;
     $post->user_id = auth()->user()->id;
     $post->category_id = $request->category;
     $post->sub_category_id = $request->subcategory;
     $post->sub_category_id = $request->subcategory;
     $post->future_img=$filename;
     $post->contant = $request->contant;
     $post->save();
     return redirect()->route('post.add')->with('success', 'Post created successfully');
    
    }

    // get all post
    function gettallpost(){
        $posts = post::where('user_id',auth()->user()->id)->latest()->get();
        return view('post.allpost',compact('posts'));
    }

    function active(Request $request){

      $post = post::find($request->id);
      if($post->is_populer==1){
        $post->is_populer=0;
        $post->save();
        return 'false';
      }else{
        $post->is_populer=1;
        $post->save();
        return 'success';
      }
        //  post::find($request->id)->get(1);
      
        
       
     

    }

    
}

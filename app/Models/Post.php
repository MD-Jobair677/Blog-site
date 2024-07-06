<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class); //belongsTo ar jonno model(category) and funtion(category) name akrokom hota hoba

    }

    public function SubCategory(){
        return $this->belongsTo(SubCategory::class); //belongsTo ar jonno model(category) and funtion(category) name akrokom hota hoba

    }

    public function User(){
        return $this->belongsTo(User::class); //belongsTo ar jonno model(category) and funtion(category) name akrokom hota hoba

    }




    // comment start
   public function Comments(){
        return $this->hasMany(Comment::class)->where('parent_id',null)->with('replies')->with('user:id,name');
    }


}

<?php

// namespace App\Models;


// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;




namespace App\Models;

use App\Models\Post;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory; 
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Post(){
        return $this->belongsTo(Post::class); //akana sb gulo comment akta post ar under a belongs kora
    }

    function replies(){
        return $this->hasMany(Comment::class,'parent_id');
    }
   
}

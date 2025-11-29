<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function storeComment(Blog $blog){
        $comment=request()->validate([
            'comment'=>'required|max:500',
        ]);
        $blog->comments()->create([
            'body'=>$comment['comment'],
            'user_id'=>Auth::id(),
        ]);
        return back();
    }
}

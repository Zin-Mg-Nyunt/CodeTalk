<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $subscribers=$blog->subscribers->filter(fn ($subscriber) => $subscriber->id != Auth::id());
        $subscribers->each(function ($subscriber) use($blog, $comment) {
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog,Auth::user(),$comment['comment']));
        });
        return back();
    }
}

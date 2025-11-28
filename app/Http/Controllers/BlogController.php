<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function index(){
        return view('blogs.index',[
            "blogs" => Blog::latest()->filter(request(['category','username','search']))
                            ->paginate(4)
                            ->withQueryString(),
            "randomBlogs"=> $this->getRandomBlogs(),
        ]);
    }
    public function show(Blog $blog){
       
        return view('blogs.show',[
            "blog"=>$blog,
            "randomBlogs"=> $this->getRandomBlogs(),
        ]);
    }
    private function getRandomBlogs(){
        return cache()->remember('randomBlogs',now()->addMinutes(2),function(){
            return Blog::inRandomOrder()->take(3)->get();
        });
    }
    public function storeComment(Blog $blog){
        $comment=request()->validate([
            'comment'=>'required|max:500',
        ]);
        $blog->comments()->create([
            'body'=>$comment['comment'],
            'blog_id'=>$blog->id,
            'user_id'=>Auth::id(),
        ]);
        return back();
    }
    public function subscriptionHandler(Blog $blog){
        $user = User::find(Auth::id());
        if($user->isSubscribed($blog)){
            $blog->unSubscribe();
        }else{
            $blog->subscribe();
        }
        return back();
    }
}

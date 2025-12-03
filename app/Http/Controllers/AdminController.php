<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function create(){
        return view('admin.blogs.form',[
            "categories"=> Category::all()
        ]);
    }
    public function store(){
        $newBlog=request()->validate([
            "title"=>"required|min:5",
            "slug"=>"required|unique:blogs",
            "body"=>"required|min:20",
            "category_id"=>"required|exists:categories,id",
        ]);
        // using s3 to save file global
        $newBlog['thumbnail'] = request('thumbnail') ? 
                                Storage::disk('s3')->url(request('thumbnail')?->store('thumbnails','s3')) :
                                null;
        auth()->user()->blogs()->create($newBlog);
        cache()->forget('randomBlogs');
        return redirect('/')->with('success','Blog created successfully!');
    }
    public function dashboard(){
        return view('admin.dashboard',[
            'blogs'=>Blog::all(),
            'categoriesCount'=>Category::count(),
            'usersCount'=>User::count(),
            'commentsCount'=>Comment::count(),
        ]);
    }
    public function index(){
        return view('admin.blogs.index',[
            'blogs'=>Blog::all(),
        ]);
    }
    public function edit(Blog $blog){
        return view('admin.blogs.form',[
            "blog"=>$blog,
            "categories"=> Category::all()
        ]);
    }
    public function update(Blog $blog){
        
        $updateBlog=request()->validate([
            "title"=>"required|min:5",
            "slug"=>["required",Rule::unique("blogs","slug")->ignore($blog->id)],
            "body"=>"required|min:20",
            "category_id"=>"required|exists:categories,id",
        ]);
        // using s3 to update file global
        $updateBlog['thumbnail'] = request('thumbnail') ? 
                                    Storage::disk('s3')->url(request('thumbnail')->store('thumbnails','s3')) : 
                                    $blog->thumbnail;

        // just fill data in memory
        $blog->fill($updateBlog);
        // check data change or not
        if ($blog->isClean()) {
            return redirect(route('admin.index'))->with('info','No update blog!');
        }
        // save in db
        $blog->save();
        cache()->forget('randomBlogs');
        return redirect(route('admin.index'))->with('success','Blog update successfully!');
    }
    public function destroy(Blog $blog){
        $blog->delete();
        cache()->forget('randomBlogs');
        return redirect(route('admin.index'))->with('success','Blog deleted successfully!');
    }
}

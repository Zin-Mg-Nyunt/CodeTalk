<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

class AdminController extends Controller
{
    public function create(){
        return view('admin.blogs.create',[
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
        $newBlog['thumbnail'] = asset("/storage/".request('thumbnail')->store('thumbnails'));
        auth()->user()->blogs()->create($newBlog);
        return redirect('/')->with('success','Blog created successfully!');
    }
}

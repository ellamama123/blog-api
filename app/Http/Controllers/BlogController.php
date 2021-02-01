<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog as BlogApp;

class BlogController extends Controller
{
    // function show tất cả
    public function index(Request $request)
    {
        if(request()->input('title')){
            return Blog::where('title', 'LIKE', '%'.request()->input('title').'%')->get();
        }
        return Blog::all();
    }

    // function tìm kiếm blog
    public function show(Blog $blog)
    {
        return $blog;
    }

    // function thêm blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'des' => 'required',
            'category' => 'required',
            'public' => 'required',
            'data_pubblic'=>'required',
        ]);
        $article = Blog::create($request->only('title', 'detail','des','category','position','public','data_pubblic','thumbs'));

        return response()->json($article, 201);
    }

    // function update blog
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'des' => 'required',
            'category' => 'required',
            'public' => 'required',
            'data_pubblic'=>'required',
        ]);
        $blog->update($request->only('title', 'detail','des','category','position','public','data_pubblic','thumbs'));

        return response()->json($blog, 200);
    }

    // function delete blog
    public function delete(Blog $blog)
    {
        $blog->delete();

        return response()->json(null, 204);
    }
}

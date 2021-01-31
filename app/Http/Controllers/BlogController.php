<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::all();
    }

    public function show(Blog $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Blog::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Blog $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Blog $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}

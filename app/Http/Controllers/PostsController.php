<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Posts\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of all the posts.
     *
     * @return Response
     */
    public function index()
    {
    	$posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Display a single post.
     *
     * @return Response
     */
    public function show($slug)
    {
        $post = Post::findBySlug($slug);
        return view('posts.show', compact('post'));
    }
}
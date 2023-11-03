<?php

namespace App\Http\Controllers;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category' , 'tag'])->get();

        return $this->successResponse(data: PostResource::collection($posts));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post = with(['title','content','image', 'reading_time']);
        return $this->successResponse(data: PostResource::make($post));
    }

}

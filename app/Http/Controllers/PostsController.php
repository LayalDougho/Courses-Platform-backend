<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('category_id' , $request->category_id)->with(['tags'])->paginate();
        return $this->successResponse(data: PostResource::collection($posts));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::with(['title','content','image', 'reading_time'])->find($id);
        if($post!=null){
            return $this->successResponse(data: $post);
        }else{
            return $this->failedResponse(message: 'No post found');
        }
    }
}

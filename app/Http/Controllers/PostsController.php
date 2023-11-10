<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->category_id == null){
            $posts = Post::with('tags')->paginate();
        }else{
            $posts = Post::where('category_id' , $request->category_id)->with('tags')->paginate();
        }

        return $this->successResponse(data: PostResource::collection($posts));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::where('id' , $id)->with('tags')->first();
        if($post!=null){
            return $this->successResponse(data: $post);
        }else{
            return $this->failedResponse(message: 'No post found');
        }
    }
}

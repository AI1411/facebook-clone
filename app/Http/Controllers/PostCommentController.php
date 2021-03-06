<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentCollection;
use App\Http\Resources\CommentResource;
use App\Models\Post;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        $data = request()->validate([
            'body' => '',
        ]);

        $post->comments()->create(array_merge($data, [
            'user_id' => auth()->user()->id,
        ]));

        return new CommentResource($post);
    }
}

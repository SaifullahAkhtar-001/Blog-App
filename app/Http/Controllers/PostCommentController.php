<?php

namespace App\Http\Controllers;

use http\Message\Body;
use Illuminate\Http\Request;
use App\Models\Post;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'body' => 'required'
        ]);
        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);
        return back();
    }

}

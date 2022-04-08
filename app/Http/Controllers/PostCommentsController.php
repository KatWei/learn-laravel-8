<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        request()->validate(['body' => 'required'], [ 'body.required' => '请输入评论内容']);
        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);
        return back();
    }
}

<?php

namespace App\Http\Controllers\News\Comments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __invoke(News $post, Request $request)
    {
        $data = $request->only('message');

        if($data['message'] != null)
        {
            $data['post_id'] = $post->id;
            $data['user_id'] = Auth::user()->id;
            Comment::create($data);
        }
        
        return redirect(route('post', $post->id));
    }
}

<?php

namespace App\Http\Controllers\News;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        if($news->isEmpty())
        {
            return redirect(route('home'));
        }

        return view('News.news', ['news' => $news]);
    }

    public function showById($id)
    {
        $post = News::find($id);

        if($post == null)
        {
            return abort(404);
        }

        return view('News.post', ['post' => $post]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\News;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function createPost(Request $request)
    {
        $data = $request->only(['title', 'description', 'content']);

        if ($data['title'] == null || $data['description'] == null || $data['content'] == null)
        {
            return redirect(route('admin'))->withErrors([
                'input.error' => 'Нужно заполнить все поля'
            ]);
        }
        News::create($data);

        return redirect(route('news'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class CuitController extends Controller
{
    public function index(): View {
    //SELECT id.post, user_id.post, content.post, name.users LEFT JOIN..
        $post = Post:: with('user')->latest()->get();

        Return view('home', compact('posts'));
    }

    public function post(Request $request): redirectResponse {}
}

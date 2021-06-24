<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $postsCount = Post::all()->count();

        return view('admin.home.index', [
            'posts_count' => $postsCount,
        ]);
    }
}

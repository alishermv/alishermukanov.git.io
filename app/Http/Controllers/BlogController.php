<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('client.index')->with(['posts' => $posts]);
    }
}

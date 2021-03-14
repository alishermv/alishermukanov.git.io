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
    public function store(Request $request) {
       Post::create([
           'id' => $request->id,
           'Title' => $request-> Title,
           'Body' => $request-> Body
       ]);
       return back();
    }
}

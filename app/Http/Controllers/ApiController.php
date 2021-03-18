<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class ApiController extends Controller
{
    public function index(Request $request) {
        $posts = Post::all();
        return response($posts, 200);
    }
    public function get_client(Request $request) {
        $posts = Post::find($request->client_id);

        if($posts == null) {
            return response(['Error' => 'not found user'], 404);
        }
        return response($posts, 200);
    }
}

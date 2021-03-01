<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/bonus', function() {
    return view('bonus');
});

Route::get('/post/create', function() {
    DB::table('posts')->insert([
        'id' => 18,
        'Title' => 'Industry News',
        'Body' => 'In raw numbers, news articles get more social shares than any other type of article.'
    ]);
});

Route::get('post', function () {
    $post = Post::find(18);
    return $post->Title;
});

Route::get('post', function () {
    $post = Post::find(18);
    return $post->Body;
});
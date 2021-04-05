<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailuserController;
use App\Http\Controllers\MailController;
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

// Route::get('/post/create', function() {
//     DB::table('posts')->insert([
//         'id' => 18,
//         'Title' => 'Industry News',
//         'Body' => 'In raw numbers, news articles get more social shares than any other type of article.'
//     ]);
// });

Route::get('/post/add', function() {
    DB::table('posts')->insert([
        'id' => 18,
        'Title' => 'Industry News',
        'Body' => 'In raw numbers, news articles get more social shares than any other type of article.'
    ]);
});

/*Route::get('post', function () {
    $post = Post::find(18);
    return $post->Title;
});*/

Route::get('post', [BlogController::class, 'index']);

Route::get('post/create', function (){
    return view('client.create');
});

Route::post('post/create', [BlogController::class, 'store'])->name('add-client');


Route::get('post/{id}', [BlogController::class, 'get_user']);


// lab8
Route::get('/user', 'App\Http\Controllers\EmailuserController@index');

Route::post('/addimage', 'App\Http\Controllers\EmailuserController@store')->name('addimage');

Route::get('mail/send','App\Http\Controllers\MailController@send');
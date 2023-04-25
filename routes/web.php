<?php

// use App\Http\Controllers\ReplyController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Notifications\ReplyAdded;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'middleware'=>'isAdmin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});



Route::group([
     'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'prefix' => 'admin',
    // 'middleware'=> 'isAdmin'
],function(){
    // Route::get('/postsShow',[AdminController::class ,'postsShow'])->name('postsShow');
    Route::get('/users',[AdminController::class ,'usersShow'])->name('users');
    Route::post('/users/changeRole',[AdminController::class ,'changeRole'])->name('changeRole');
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('/posts',[AdminController::class ,'postsShow'])->name('posts');
    
});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::group([
    config('jetstream.auth_session'),
    // 'middleware'=>'isCustomer'
    'middleware'=>['auth']
],function(){
    Route::post('post/destroyImage',[PostController::class,'destroyImage']);
    Route::post('/postReport/{id}',[PostController::class,'postReport'])->name('postReport');
    Route::resource('post',PostController::class);
    Route::resource('comment',CommentController::class);
});
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::post('/filterPost',[HomeController::class,'filterPost'])->name('filterPost');
Route::get('/buypage/{id}',[HomeController::class,'createBuypage'])->name('buyPage');


Route::get('/reply', [ReplyController::class,'index']);
Route::get('/myStor', function(){
    return view('Home.MyStor');
});





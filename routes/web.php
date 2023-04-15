<?php

// use App\Http\Controllers\ReplyController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
        // return redirect('dashboard');
    });
   

});



Route::group([
     'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'prefix' => 'admin',
],function(){
    Route::get('/users', function () { return view('admin.users'); })->name('users');
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');

});

Route::group([
    // 'middleware'=>'isCustomer'
],function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/product',[HomeController::class,'product'])->name('product');
    Route::post('/filterPost',[HomeController::class,'filterPost'])->name('filterPost');
    Route::get('/buypage/{id}',[HomeController::class,'createBuypage'])->name('buyPage');
    
    Route::resource('comment',CommentController::class);
});


Route::get('/reply', [ReplyController::class,'index']);




Route::post('post/destroyImage',[PostController::class,'destroyImage']);
Route::resource('post',PostController::class);

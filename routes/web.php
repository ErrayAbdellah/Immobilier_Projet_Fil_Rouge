<?php

// use App\Http\Controllers\ReplyController;
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

Route::get('/home', function () { return view('Home.home'); })->name('Home');


Route::get('/reply', [ReplyController::class,'index']);




// test *****************************************


Route::resource('post',PostController::class);
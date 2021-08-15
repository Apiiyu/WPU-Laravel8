<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
  return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
  return view('about', [
    'title' => 'About',
    'nama' => 'Rafi Khoirulloh',
    'age' => 17,
    'address' => 'Jl. Babakan Jati'    
  ]);
});


Route::get('/posts', [PostController::class, 'index']);

// <-- Single Posts -->
Route::get('/posts/{slug}', [PostController::class, 'show']);
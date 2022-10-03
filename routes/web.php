<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('index/tournament', function () {
    return view('main.tournament');
});

Route::get('index/tournament/bracket', function () {
    return view('main.bracket');
});

Route::get('index/tournament/add', function () {
    return view('main.add');
});

Route::get('index/tournament/settings', function () {
    return view('main.settings');
});

Route::get('index/new', function () {
    return view('main.new');
});

Route::get('auth/register', function () {
    return view('auth/register');
});

Route::get('auth/login', function () {
    return view('auth/login');
});

Route::get('index', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name"  => "Jeremmy Hesa",
        "email" => "jeremmyhesa10@gmail.com",
        "image" => "spidey.jpg"
    ]);
});

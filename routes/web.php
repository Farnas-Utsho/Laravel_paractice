<?php

use App\Http\Controllers\add_controller;
use App\Http\Controllers\notific;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_control;
use App\Http\Controllers\student;
use App\Http\Controllers\welcome;
use App\Mail\MytestEmail;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Mail;
use App\Notifications\EmailNotification;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name("home");

// Route::get('/post', function () {
//     return view('post');
// });
// Route::view('/post', 'al');
// Route::get('/hello/first', function () {
//     return view('firstpost');
// });
// Route::view('home', '/welcome');
// Route::get('/post/{id?}/com/{commentid?}', function ($id = null, $comment = null) {
//     if ($id) {
//         return '<h1>Post ID : ' . $id . '</h1><br><h2>Comment :' . $comment . '</h2>';
//     } else {
//         return '<h1>No Id Found</h1>';
//     }
// });


//Renaming route name (Named Route)
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/post', function () {
//     return view('post');
// })->name('mypost');


//Route using groups
// Route::get('/', function () {
//     return view('welcome');
// })->name("home");
// Route::prefix('page')->group(function () {
//     Route::get('/about', function () {
//         return '<h1> About page</h1>';
//     });
//     Route::get('/post')->name('mypost');
//     Route::get('/gallery', function () {
//         return '<h1> Gallery Page </h1>';
//     });
// });
// //Fallback method to declare error
// Route::fallback(function () {
//     return '<h1>Page Not Found.</h1>';
// });

// Route::view('/about', 'about');
// Route::view('/cb', 'cb');
Route::get('/', [user_control::class, 'show']);
// Route::post('/user', [user_control::class, 'store'])->name('name');
Route::get('/come', [welcome::class, 'welcome']);

// Route::get('/not',[notific::class,'notify']);
Route::get('/stu', [student::class, 'showstudents']);
Route::get('/add', function () {
    return view('adduser');
});
Route::post('/ad', [add_controller::class, 'adduser'])->name('adduser');

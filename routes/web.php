<?php

use App\Http\Controllers\SendMail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/services', function () {
    return view("services");
});

Route::get('/teams', function () {
    return view("teams");
});

Route::get('/contacts', function () {
    return view("contact");
});


Route::get('/about-us', function () {
    return view("about");
});

Route::get('/privacy-policy', function () {
    return view("privacy-policy");
});

Route::post('/send-a-message', [SendMail::class, 'SendMessage']);
Route::post('/online-upload', [SendMail::class, 'OnlineUpload']);

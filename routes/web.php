<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('hello');
});
Route::get('/information-country', function () {
    return Inertia::render('Map');
});
Route::get('/list-of-device', function () {
    return Inertia::render('ListOfDevice');
});
Route::get('/info-1', function () {
    return Inertia::render('Info1');
});
Route::get('/buy', function () {
    return Inertia::render('Buy');
});
Route::get('/subscribe', function () {
    return Inertia::render('Buy');
});
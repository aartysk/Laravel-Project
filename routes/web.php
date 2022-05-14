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

use App\Http\Controllers\ClientController;
Route::get('/clients', [ClientController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function () {
    return view('page', ['name' => 'Artis']);
});

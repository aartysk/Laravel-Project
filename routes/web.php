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
Route::controller(ClientController::class)->group(function (){
    Route::prefix('clients')->group(function (){
        Route::get('/','index')->name('Clients.index');
        Route::get('/create','create');
        Route::post('/create','store')->name('Clients.create');
        Route::get('/show/{client}','show')->name('Clients.show');
        Route::get('/edit/{client}','edit')->name('Clients.edit');
        Route::post('/edit/{client}','update');
        Route::get('/delete/{client}','destroy')->name('Clients.delete');
});
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function () {
    return view('page', ['name' => 'Artis']);
});

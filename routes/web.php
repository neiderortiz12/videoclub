<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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
Route::get('/',[HomeController::class, 'getHome']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/catalog',[CatalogController::class, 'getIndex']);
    Route::get('/catalog/show/{id}',[CatalogController::class, 'getShow']);
    Route::get('/catalog/create',[CatalogController::class, 'getCreate']);
    Route::get('/catalog/edit/{id}',[CatalogController::class, 'getEdit']);
    Route::post('/catalog/create',[CatalogController::class, 'postCreate']);
    Route::put('/catalog/edit/{id}',[CatalogController::class, 'putEdit']);


});

require __DIR__.'/auth.php';

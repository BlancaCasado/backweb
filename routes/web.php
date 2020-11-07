<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;

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

Route::get('authors',[AuthorController::class, 'index']);

Route::get('authors/create',[AuthorController::class, 'create']);

Route::post('authors/{([0-9\-]+)}',[AuthorController::class, 'index']);

// $router->get('/clients',[$clientControl, 'getAll']);
// $router->get('/clients/([0-9\-]+)',[$clientControl,'getClient']);
// $router->post('/clients',[$clientControl,'register']);
// $router->post('/clients/([0-9\-]+)',[$clientControl,'updClient']);
// $router->get('/clients/([0-9\-]+)/delete',[$clientControl,'delClient']);

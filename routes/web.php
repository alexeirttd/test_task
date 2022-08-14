<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'outputInfo']);

Route::get('/add-note', [PostController::class, 'addNote']);

Route::post('/client-submit', [PostController::class, 'clientSubmit']);

Route::post('/car-submit', [PostController::class, 'carSubmit']);


Route::get('/{id}', [PostController::class, 'getClientById']);

Route::get('/edit-note/{id}', [PostController::class, 'editNote']);

Route::get('/delete-note/{id}', [PostController::class, 'deleteNote']);

Route::post('/update-client', [PostController::class, 'updateClient']);

Route::post('/update-car', [PostController::class, 'updateCar']);

Route::get('/parking-list', [PostController::class, 'parkingListInfo']);

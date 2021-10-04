<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotebookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/notebooks')->group(function () {

    Route::get('/', [NotebookController::class, 'get']);
    Route::post('/', [NotebookController::class, 'createRecord']);
    Route::delete('/{id}', [NotebookController::class, 'delete'])->where(['notebook_id' => '[0-9+]']);
    Route::put('/{id}', [NotebookController::class, 'updateRecord'])->where(['notebook_id' => '[0-9+]']);
});

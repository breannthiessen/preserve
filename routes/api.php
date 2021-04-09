<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_users', [GeneralController::class, 'getUsers']);

Route::group(['prefix' => 'recipe/'], function () {
    Route::post('create_recipe', [RecipeController::class, 'createRecipe']);
});
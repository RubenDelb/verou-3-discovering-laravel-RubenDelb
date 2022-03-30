<?php

// use App\Http\Controllers\PageController; -> can be replaced by "see line 17,19 and 21!"

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/hello-world', [App\Http\Controllers\PageController::class, 'helloWorld'])->name('hello-world');
Route::post('/hello-world', [App\Http\Controllers\PageController::class, 'emailSubmitted']);

Route::get('/goodbye-world', [App\Http\Controllers\PageController::class, 'goodbyeWorld'])->name('goodbye-world');

Route::get('/recipes', [RecipeController::class, 'getAllRecipes'])->name('recipes');
Route::post('/recipes', [RecipeController::class, 'createNewRecipe']);


Route::get('/update-recipe', [RecipeController::class, 'showUpdateForm'])->name('update-recipe');

Route::post('/update-recipe', [RecipeController::class, 'updateRecipe']);

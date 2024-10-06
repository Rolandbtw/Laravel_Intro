<?php

use App\Http\Controllers\AiToolsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('aitools', AiToolsController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('tags', TagsController::class);
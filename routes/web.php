<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/feed',[PostController::class, 'index']);

//Route::resource('posts' , PostController::class);



<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KeywordController;

Route::get('/', [KeywordController::class, 'index']);

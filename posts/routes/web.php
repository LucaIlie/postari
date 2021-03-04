<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('index',[PageController::class,'index']);

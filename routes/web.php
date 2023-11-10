<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('Welcome_Laravel').'<br> Most Welcome';
// });

Route::get('/', [UserController::class,'index']);



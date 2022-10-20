<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;





Route::get('/', function () {
    return view('welcome');
});


Route::get("/lista",[SchoolController::class,"listStudent"]);
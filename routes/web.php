<?php

use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('visitors.index');
});

Route::resource('visitors', VisitorController::class);
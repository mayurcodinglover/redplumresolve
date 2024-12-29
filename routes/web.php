<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view('home');
});
Route::get('/get-chart-data', [usercontroller::class, 'getChartData']);
Route::get('test',[usercontroller::class,'index'])->name('index');

<?php
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\auth;

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/services', function () {
    return view('services');
})->name('services');



Route::get('/', [HomeController::class, 'index']);



Route::get('/contact', function () {
    return view('contact');
})->name('contact');






Route::get('/db-test', function () {
    return DB::connection()->getDriverName();
});

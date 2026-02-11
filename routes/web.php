<?php
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator as ValidatorFacade;
use Illuminate\Support\Facades\URL as URLFacade;
use Illuminate\Support\Facades\Session as SessionFacade;



Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::get('/homekrd', [HomeController::class, 'homeKrd'])->name('home.krd'); 


///

Route::get('/{lang}', function($lang){
    if($lang == 'kur'){
        App::setLocale('kur');
} 
return view('home');


});






Route::get('/', [HomeController::class, 'index']);


Route::get('/db-test', function () {
    return DB::connection()->getDriverName();
});

Auth::routes();


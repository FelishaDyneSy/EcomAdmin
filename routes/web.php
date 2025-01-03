<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;




// Route::get('/',[HomeController::class,'index'])->middleware('auth');
Route::view('/', 'home.userpage');
Route::view('/test', 'test');

Route::view('/create-employee', 'home.create-employee');
// Volt::route('/edit-employee', 'home.edit-employee');

// Route::view('/edit-employee', 'home.edit-employee');
Route::get('/edit-employee/{employee}', [EmployeeController::class, 'edit']);
Route::post('/employee/{employee}', [EmployeeController::class, 'update']);
// 
Route::get('/updateaccount/{employee}', [EmployeeController::class, 'accountUpdate']);
// 
Route::get('/HR', function () {
    return view('home.HumanR');
});
Route::get('/financial', function () {
    return view('home.Financial');
});
Route::get('/logistic', function () {
    return view('home.logistic');
});
Route::get('/acc', [EmployeeController::class, 'index']);

// ----component --//
Route::view('sign-up','register')->middleware('guest');

Route::get('/message-chat', function () {
    return view('components.message-chat');
});
Route::get('/map-vector', function () {
    return view('components.map-vector');
});
Route::get('/map-google', function () {
});
Route::get('/logins', function () {
    return view('login');
})->middleware(['guest'])->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/logins');
});

// Route::view('/', 'login');

Route::get('/invoice', function () {
    return view('components.invoice');
});

Route::get('/forgot-passwords', function () {
    return view('components.forgot-passwords');
});
Route::get('/email-details', function () {
    return view('components.email-details');
});
Route::get('/data-tables', function () {
    return view('components.data-tables');
});
Route::get('/inbox', function () {
    return view('components.inbox');
});



require __DIR__.'/auth.php';

Route::get('redirect',[HomeController::class,'redirect']);


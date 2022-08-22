<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () { return redirect('/application'); });
    Route::post('/getDistricts', [\App\Http\Controllers\DistrictController::class, 'getDistricts']);
    Route::post('/application', [\App\Http\Controllers\ApplicantController::class, 'store'])->name('application_submit');
    Route::middleware(['is_verified'])->group(function () {
        Route::get('/result', [\App\Http\Controllers\ApplicantController::class, 'show_result'])->name('result');
        Route::get('/application', [\App\Http\Controllers\ApplicantController::class, 'create'])->name('application');
        Route::get('/message', function () { return view('message'); })->name('message');
        Route::get('/verified',[\App\Http\Controllers\ApplicantController::class, 'verified'])->name('verified');
    });
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin_dashboard');

    Route::resource('applicant', \App\Http\Controllers\ApplicantController::class)->except(['create', 'store']);
    Route::get('/users/unverified', [\App\Http\Controllers\ApplicantController::class, 'unverified_users']);
    Route::post('/users/unverified', [\App\Http\Controllers\ApplicantController::class, 'verify_users']);
});

require __DIR__.'/auth.php';



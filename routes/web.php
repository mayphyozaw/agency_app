<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\LaborController;
use App\Http\Controllers\LocalAgentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RejectController;
use App\Http\Controllers\RejectListsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TownshipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return Auth::check() ? redirect()->route('home') : redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('permission', PermissionController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('country', CountryController::class);
    Route::resource('user', UserController::class);
    Route::post('user/bulk/delete', [UserController::class, 'bulkDelete'])->name('user_bulkDelete');
    Route::get('user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::resource('local_agent', LocalAgentController::class);
    Route::get('getTownship', [TownshipController::class, 'getTownships'])->name('getTownship');
    Route::resource('labors', LaborController::class);
    Route::get('reject/reject_passport/{id}', [RejectController::class, 'rejectPassport'])->name('rejectPassport');
    Route::resource('reject_lists', RejectListsController::class);
});

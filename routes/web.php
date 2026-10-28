<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// ---------- Landing Page (template Restoran) ----------
Route::name('landing.')->controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/menu', 'menu')->name('menu');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/team', 'team')->name('team');
});

// ---------- Admin (template Upcube) ----------
Route::prefix('admin')->name('admin.')->controller(AdminController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/calendar', 'calendar')->name('calendar');
    Route::get('/sweet-alert', 'sweetAlert')->name('sweet-alert');
    Route::get('/datatable', 'datatable')->name('datatable');
    Route::get('/form-elements', 'formElements')->name('form-elements');
    Route::get('/login', 'login')->name('login');
});

<?php

use App\Http\Controllers\LeadController;
use App\Models\Lead;
use Illuminate\Support\Facades\Route;

Route::get('/', [LeadController::class, 'welcome']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(LeadController::class)->group(function () {
        Route::get('/leads', 'index')->name('leads.index');
        Route::get('/leads/create', 'create')->name('leads.create');
        Route::post('/leads/store', 'store')->name('leads.store');
        Route::get('/leads/show/{lead}', 'show')->name('leads.show');
        Route::get('leads/{lead}/edit', 'edit')->name('leads.edit');
        Route::put('/leads/{lead}/update', 'update')->name('leads.update');
        Route::delete('/leads/delete/{lead}', 'destroy')->name('leads.delete');
    }); 
});


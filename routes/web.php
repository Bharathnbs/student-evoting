<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\CreateAdmin;
use App\Http\Livewire\User\CreateUser;
use App\Http\Livewire\Admin\AdminAuthenticate;
use App\Http\Livewire\User\UserAuthenticate;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\Admin\UserIndex;
use App\Http\Livewire\Admin\CreateCandidate;
use App\Http\Livewire\Admin\ShowCandidate;
use App\Http\Livewire\Admin\WinerReport;

Route::name('user.')->group(function () {
    Route::get('/login', UserAuthenticate::class)->middleware('guest')->name('login');

    Route::middleware('auth:web')->group(function (){
        Route::get('/', UserDashboard::class)->name('dashboard');
        Route::get('/create', CreateUser::class)->name('create');
    });
});
    
Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/login', AdminAuthenticate::class)->middleware('guest')->name('login');

    Route::middleware('auth:admin')->group( function (){
        Route::get('/', AdminDashboard::class)->name('dashboard');
        Route::get('/create', CreateAdmin::class)->name('create');
        Route::get('/users', UserIndex::class)->name('userindex');
        Route::get('/candidate/create', CreateCandidate::class)->name('create_candidate');
        Route::get('/candidate', ShowCandidate::class)->name('show_candidate');
        Route::get('/winerreport', WinerReport::class)->name('winer_report');
    });
}); 

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

Route::name('user.')->group(function (){
    
    Route::get('/login', UserAuthenticate::class)->name('user_login');

    // Route::middleware('auth:web')->group(function (){

        Route::get('/index', UserDashboard::class)->name('user_index');
        Route::get('/create', CreateUser::class)->name('user_create');
    // });
});
    


Route::name('admin.')->group(function ()
{
    Route::get('/admin/login', AdminAuthenticate::class)->name('admin_login');

    // Route::middleware('auth:admin')->group( function (){

        Route::get('/admin/index', AdminDashboard::class)->name('admin_index');
        Route::get('/admin/create', CreateAdmin::class)->name('admin_create');
        Route::get('/admin/users', UserIndex::class)->name('admin_userindex');
        Route::get('/admin/candidate/create', CreateCandidate::class)->name('create_candidate');

    // });
}); 

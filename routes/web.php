<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\CreateAdmin;
use App\Http\Livewire\Admin\AdminAuthenticate;
use App\Http\Livewire\User\CreateUser;


    Route::get('/create', CreateUser::class)->name('user_create');

// Route::get('/admin/create', CreateAdmin::class)->name('admin_create'); 
Route::name('admin.')->group(function ()
{
    Route::get('/admin/login', AdminAuthenticate::class)->middleware('guest')->name('admin_login');
}); 

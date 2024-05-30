<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\Createpost;
use App\Livewire\Showpost;
use App\Livewire\Uploadphoto;

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/post',Showpost::class);
Route::get('/post/create',Createpost::class);
Route::post('/index');
Route::get('/showphoto',UploadPhoto::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
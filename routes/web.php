<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;


//  get , post , delete put / pacth



Route::get('/',  function () {
    return view('welcome');
});

Route::get('/test',  [Admincontroller::class, 'admin']);
Route::get('/form',  [Admincontroller::class, 'form'])->name("admin.form");
Route::post('/form',  [Admincontroller::class, 'createTable'])->name("admin.form");



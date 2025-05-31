<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;

Route::get('/', function () {
    return view('landing');
}); // Halaman Landing

Route::resource('buku-tamu', BukuTamuController::class); // CRUD Buku Tamu

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Models\Laptop;

Route::get('/',[LaptopController::class, 'index'])->name('laptops');
Route::get('/create-laptop', [LaptopController::class, 'create'])->name('create-laptop');
Route::post('/save-laptop', [LaptopController::class, 'store'])->name('save-laptop');
Route::delete('/delete-laptop/{laptop}', [LaptopController::class, 'destroy'])->name('delete-laptop');
Route::get('/edit-laptop/{laptop}', [LaptopController::class, 'edit'])->name('edit-laptop');
Route::put('/update-laptop/{laptop}', [LaptopController::class, 'update'])->name('update-laptop');
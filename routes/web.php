<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EngineerController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/create',[EngineerController::class,'create'])->name('create');
Route::post('/new', [EngineerController::class, 'new'])->name('new');
Route::get('/show',[EngineerController::class,'show'])->name('show');
Route::get('/edit/{id}', [EngineerController::class, 'edit'])->name('edit');
Route::get('/detail/{id}', [EngineerController::class, 'detail'])->name('detail');
Route::patch('/update', [EngineerController::class, 'update'])->name('update');
Route::get('/update', [EngineerController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [EngineerController::class, 'delete'])->name('delete'); 







require __DIR__.'/auth.php';

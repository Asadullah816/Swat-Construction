<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
});
Route::view('addteam', 'pages.addteam')->name('addteam');
Route::post('addteam', [HomeController::class, 'addTeam'])->name('addteam');
Route::get('/teams', [HomeController::class, 'getTeams'])->name('teams');
Route::get('/team/{id}', [HomeController::class, 'getTeam'])->name('team');
Route::get('/edit-team/{id}', [HomeController::class, 'editTeam'])->name('editTeam');
Route::post('/update-team/{id}', [HomeController::class, 'updateTeam'])->name('updateTeam');
Route::delete('/delete-team/{id}', [HomeController::class, 'deleteTeam'])->name('deleteTeam');
require __DIR__ . '/auth.php';

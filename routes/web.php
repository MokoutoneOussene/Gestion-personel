<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PersonnelController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/', [PagesController::class, 'index'])->name('authentification');
Route::post('seconnecter', [AuthController::class, 'login'])->name('login');
Route::post('sedeconnecter', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [PagesController::class, 'dash'])->name('dashboard');

Route::resource('gestion_personnel', PersonnelController::class);
Route::resource('gestion_mission', MissionController::class);
Route::resource('gestion_contrat', ContratController::class);
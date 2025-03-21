<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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

// Route::get('/', [DashboardController::class, 'index'])->name('home');
// Route::get('/ourservice', [ServiceController::class, 'index'])->name('ourservice');
Route::get('/ourservice', [ServiceController::class, 'equipmentshow'])->name('equipment.show');
Route::get('/no-bake-sand-foundry', [ServiceController::class, 'noBakesandShow'])->name('equipment.noBakesand');
Route::get('/sand-mixer-unit', [ServiceController::class, 'sandMixerShow'])->name('equipment.sandMixer');
Route::get('/mould-handaling-system', [ServiceController::class, 'mouldhandalingShow'])->name('equipment.mouldhandaling');
Route::get('/home', [ServiceController::class, 'HomeShow'])->name('home');
Route::get('/about', [ServiceController::class, 'AboutShow'])->name('about');
Route::get('/contact', [ServiceController::class, 'ContactShow'])->name('contact');
Route::get('/green-sand-foundry-equipments', [ServiceController::class, 'greensandShow'])->name('equipment.greensand');
Route::get('/lost-foam-casting-plant', [ServiceController::class, 'lostfoamShow'])->name('equipment.lostfoam');
Route::post('/contact-submit', [ContactUsController::class, 'store'])->name('contact.submit');


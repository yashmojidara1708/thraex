<?php
// namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\admin\AdminController;
// use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\frontend\DashboardController;
// use App\Http\Controllers\frontend\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\ContactUsController;

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

Route::get('/', [App\Http\Controllers\frontend\ServiceController::class, 'HomeShow']);
Route::get('/home', [App\Http\Controllers\frontend\ServiceController::class, 'HomeShow'])->name('home');
Route::get('/about', [App\Http\Controllers\frontend\ServiceController::class, 'AboutShow'])->name('about');
Route::get('/contact', [App\Http\Controllers\frontend\ServiceController::class, 'ContactShow'])->name('contact');
Route::get('/ourservice', [App\Http\Controllers\frontend\ServiceController::class, 'equipmentshow'])->name('equipment.show');
Route::get('/no-bake-sand-foundry', [App\Http\Controllers\frontend\ServiceController::class, 'noBakesandShow'])->name('equipment.noBakesand');
Route::get('/sand-mixer-unit', [App\Http\Controllers\frontend\ServiceController::class, 'sandMixerShow'])->name('equipment.sandMixer');
Route::get('/mould-handaling-system', [App\Http\Controllers\frontend\ServiceController::class, 'mouldhandalingShow'])->name('equipment.mouldhandaling');
Route::get('/green-sand-foundry-equipments', [App\Http\Controllers\frontend\ServiceController::class, 'greensandShow'])->name('equipment.greensand');
Route::get('/lost-foam-casting-plant', [App\Http\Controllers\frontend\ServiceController::class, 'lostfoamShow'])->name('equipment.lostfoam');
Route::post('/contact-submit', [ContactUsController::class, 'store'])->name('contact.submit');

Route::prefix('admin')->group(function () {
    // Route::get('/', [App\Http\Controllers\admin\AdminController::class, 'dashboard'])->name('admin.home');
    // Route::get('/dashboard', [App\Http\Controllers\admin\AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('admin.home');

    Route::get('/dashboard', [App\Http\Controllers\admin\AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Service Management Routes
    Route::get('/services', [App\Http\Controllers\admin\ServiceController::class, 'index'])->name('admin.services');
    Route::post('/services', [App\Http\Controllers\admin\ServiceController::class, 'save'])->name('admin.services.store');
    Route::get('/services/fetch', [App\Http\Controllers\admin\ServiceController::class, 'fetch'])->name('admin.services.fetch');
    Route::get('/services/{id}/edit', [App\Http\Controllers\admin\ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::delete('/services/{id}', [App\Http\Controllers\admin\ServiceController::class, 'destroy'])->name('admin.services.destroy');

    Route::get('/settings', [App\Http\Controllers\admin\SettingsController::class, 'index'])->name('admin.settings');
    Route::post('/settings/save', [App\Http\Controllers\admin\SettingsController::class, 'save'])->name('admin.settings.save');
    Route::get('/settings/fetch', [App\Http\Controllers\admin\SettingsController::class, 'fetch'])->name('admin.settings.fetch');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DictamenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function() {
//     return view('auth.login');
// });

// RUTAS DICTAMENES
Route::get('/', [DictamenController::class, 'index'])->name('dictamen.index');
Route::get('dictamen/create', [DictamenController::class, 'create'])->name('dictamen.create');
Route::post('dictamen/store', [DictamenController::class, 'store'])->name('dictamen.store');
Route::get('dictamen/show/{id}', [DictamenController::class, 'show'])->name('dictamen.show');
Route::get('dictamen/edit/{id}', [DictamenController::class, 'edit'])->name('dictamen.edit');
Route::put('dictamen/update/{id}', [DictamenController::class, 'update'])->name('dictamen.update');

//Ruta Middleware autenticacion Jetstream
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

<?php

use App\Http\Controllers\PersonnelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PersonnelController::class, 'accueil']);
Route::get('liste', [PersonnelController::class, "index"])->name("liste");
Route::get('formulaire', [PersonnelController::class, "create"])->name("formulaire");
Route::post('insertion', [PersonnelController::class, 'store'])->name('insertion');
Route::get('supprimer/{id}', [PersonnelController::class, 'destroy']);

Route::get('/add-image',[PersonnelController::class,'addImage'])->name('images.add');

Route::post('/store-image',[PersonnelController::class,'storeImage'])
->name('images.store');

Route::get('/view-image',[PersonnelController::class,'viewImage'])->name('images.view');


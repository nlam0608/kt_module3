<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;
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

Route::prefix('agency')->group(function(){
    Route::get('/',[AgencyController::class, 'index'])->name('agency.index');
    Route::get('/create',[AgencyController::class, 'create'])->name('agency.create');
    Route::post('/create',[AgencyController::class, 'store'])->name('agency.store');
    Route::get('/{id}/update',[AgencyController::class, 'edit'])->name('agency.edit');
    Route::post('/{id}/update',[AgencyController::class, 'update'])->name('agency.update');
    Route::get('/{id}/delete',[AgencyController::class, 'destroy'])->name('agency.delete');
    Route::get('/search',[AgencyController::class, 'search'])->name('agency.search');
});

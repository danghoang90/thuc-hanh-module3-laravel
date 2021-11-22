<?php

use App\Http\Controllers\DealerController;
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

Route::get('/', [DealerController::class, 'index'])->name('dealer.list');
//CreateUser
Route::get('create', [DealerController::class, 'create'])->name('dealer.add');
Route::post('create', [DealerController::class, 'store'])->name('dealer.postAdd');

Route::get('{id}/delete', [DealerController::class, 'destroy'])->name('dealer.delete');

Route::get('{id}/update', [DealerController::class, 'update'])->name('dealer.update');
Route::post('{id}/update', [DealerController::class, 'edit'])->name('dealer.edit');

Route::get('search', [\App\Http\Controllers\DealerController::class, 'search'])->name('dealer.search');



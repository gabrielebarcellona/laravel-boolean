<?php

use App\Http\Controllers\Guest\BillController;
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

Route::get('/', [BillController::class, 'index'])->name('home');
Route::resource('bills', BillController::class);

Route::get('bills/{id}', [BillController::class, 'show'])->name('bills.show');

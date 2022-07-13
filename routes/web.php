<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/new-box',[AdminController::class,'newBox'])->name('newbox');

    Route::get('/new-item', [AdminController::class,'newItem'])->name('newitem');

    Route::get('/create-box', [AdminController::class,'createNewBox'])->name('createbox');

});
require __DIR__.'/auth.php';

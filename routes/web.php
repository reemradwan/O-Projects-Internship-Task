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

    // common
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    //Admin routes
    Route::get('/new-box',[AdminController::class,'newBox'])->name('newbox');

    Route::get('/new-item', [AdminController::class,'newItem'])->name('newitem');

    Route::get('/create-box', [AdminController::class,'createNewBox'])->name('createbox');

    //User routes
    Route::get('/my-boxes',[UserController::class,'myBoxes'])->name('myboxes');

    Route::get('/buy-box',[UserController::class,'buyBox'])->name('buybox');


});
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMessageController;

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


Route::get('/', [SendMessageController::class, 'welcomePage'])->name('welcome.page');
Route::post('/', [SendMessageController::class, 'getMessage'])->name('get.message');

Route::get('/success', [SendMessageController::class, 'showSuccess'])->name('show.success');

Route::get('/reload-captcha', [SendMessageController::class, 'reloadCaptcha']);

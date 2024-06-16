<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

Route::get('login', [SendMessageController::class, 'loginUser'])->name('login');
Route::post('login', [SendMessageController::class, 'loginPost'])->name('login.post');

Route::get('set-project/{id}', [SendMessageController::class, 'setProjectSession'])->name('setProjectSession');
Route::get('project', [SendMessageController::class, 'project'])->name('project');

Route::get('/', [SendMessageController::class, 'welcomePage'])->name('welcome.page');

Route::post('/logout', [SendMessageController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
  Route::get('/admin/dashboard', [SendMessageController::class, 'dashboard'])->name('dashboard');
  Route::post('/admin/dashboard', [SendMessageController::class, 'addProject'])->name('add.project');
  Route::post('admin/dashboard/{projectId}/delete', [SendMessageController::class, 'deleteProject']);
  Route::post('admin/dashboard/add-image', [SendMessageController::class, 'addImage'])->name('add.image');
  Route::get('admin/dashboard/{imageId}', [SendMessageController::class, 'viewImages'])->name('view.images');





  
/******************************************** This Route is For Logout *****************************/
Route::get('/logout', function (Request $request) {
  Session::flush();
  Auth::logout();

  return redirect()->route('welcome.page');
})->name('logout');
/******************************************** This Route is For Logout *****************************/
});



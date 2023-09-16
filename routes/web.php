<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth', 'checkIsAdmin'])->group(function () {

    Route::get('/user-list', [UserController::class, 'getAllUsersExceptAdmins'])->name('user-list');
    Route::get('/category-tree', [CategoryController::class, 'treeView'])->name('category-tree');

    Route::resource('category',CategoryController::class);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect('/user-dashboard');
    });
    Route::get('/user-dashboard-login/{id}', [UserController::class, 'loginUserDashboard'])->name('user-dashboard-login');

    Route::get('/user-dashboard', function () {
        return view('dashboard');
    })->name('user-dashboard');
});



require __DIR__ . '/auth.php';

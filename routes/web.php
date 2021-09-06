<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
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
    if (auth()->user()) {
        return redirect('/index');
    }
    return view('auth.login');
});
Route::get('/index', [BackendController::class, 'index']);
Auth::routes();


Route::middleware(['PermissionCheck','auth'])->group(function(){
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);
Route::get('/superadmin/users', [UserController::class, 'shownAdmins'])->name('supeadmin.users');
Route::get('/superadmin/ajax/users', [UserController::class, 'shownAjaxAdmins'])->name('adminsajax.show');
Route::get('/admin/users', [UserController::class, 'shownUsers'])->name('admin.users');
Route::get('/admin/ajax/users', [UserController::class, 'shownAjaxUsers'])->name('userdAjax.show');
 });
Route::get('/verifyemail/{token}',[Auth\RegisterController::class, 'verify']);
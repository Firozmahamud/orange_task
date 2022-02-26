<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

//users
Route::resource('users',App\Http\Controllers\UserController::class);

Route::get('users/active/{id}',[App\Http\Controllers\UserController::class,'active'])->name('active');
Route::get('users/block/{id}',[App\Http\Controllers\UserController::class,'block'])->name('block');

// //
// Route::get('/file', [\App\Http\Controllers\ExcelController::class,'index']);
// Route::get('export', [\App\Http\Controllers\ExcelController::class,'export'])->name('export');
// Route::post('import', [\App\Http\Controllers\ExcelController::class,'import'])->name('import');
// Route::get('pdf', [\App\Http\Controllers\PDFController::class, 'generatePDF'])->name('pdf');

// use App\Http\Controllers\ImportExportController;

Route::get('/file', [App\Http\Controllers\ImportExportController::class, 'index'])->name('file');
Route::post('import', [App\Http\Controllers\ImportExportController::class, 'import']);
Route::get('export', [App\Http\Controllers\ImportExportController::class, 'export']);


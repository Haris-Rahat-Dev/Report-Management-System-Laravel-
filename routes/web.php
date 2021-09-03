<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReportController;
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

/*
To disable registration go to config/fortify.php and comment out Features::registration().

'features' => [ //Features::registration(), Features::resetPasswords(), // Features::emailVerification(), Features::updateProfileInformation(), Features::updatePasswords(), Features::twoFactorAuthentication(), ],

*/


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');


//For Category
Route::get('categoryForm', [CategoryController::class, 'create'])->name('categoryForm');
Route::post('submitted', [CategoryController::class, 'store'])->name('storeCategory');
Route::put('update/Category/{id}', [CategoryController::class, 'update'])->name('updateCategory');
Route::get('edit/Category/{id}', [CategoryController::class, 'edit'])->name('editCategory');
Route::delete('delete/Category/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');

//For Reports
Route::get('reportForm', [ReportController::class, 'create'])->name('reportForm');
Route::post('report/submit', [ReportController::class, 'store'])->name('saveReport');
Route::get('viewReports', [ReportController::class, 'index'])->name('viewReports');
Route::get('editReport/{report}', [ReportController::class, 'edit'])->name('editReport');
Route::put('updateReport/{id}', [ReportController::class, 'update'])->name('updateReport');

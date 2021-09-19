<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

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

Route::get('/', [BorrowController::class, 'show']);
Route::get('/authors', [BorrowController::class, 'showAuthors']);
Route::get('/books', [BorrowController::class, 'showBooks']);
Route::get('/borrows', [BorrowController::class, 'showBorrows']);
Route::get('/students', [BorrowController::class, 'showStudents']);
Route::get('/types', [BorrowController::class, 'showTypes']);



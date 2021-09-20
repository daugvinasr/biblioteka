<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BorrowsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TypesController;

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

Route::get('/', [ShowController::class, 'show']);
Route::get('/authors', [AuthorsController::class, 'showAuthors']);
Route::get('/books', [BooksController::class, 'showBooks']);
Route::get('/borrows', [BorrowsController::class, 'showBorrows']);
Route::get('/students', [StudentsController::class, 'showStudents']);
Route::get('/types', [TypesController::class, 'showTypes']);



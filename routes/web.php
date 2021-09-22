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

Route::get('/main', [ShowController::class, 'show']);
Route::Post('/main', [ShowController::class, 'show']);

Route::get('/students', [StudentsController::class, 'showStudents']);
Route::get('/types', [TypesController::class, 'showTypes']);

Route::get('/authors', [AuthorsController::class, 'showAuthors']);
Route::Post('/authors', [AuthorsController::class, 'putAuthors']);
Route::get('/authors/{id}', [AuthorsController::class, 'deleteAuthors']);
Route::get('/authors/edit/{id}', [AuthorsController::class, 'showForEditAuthors']);
Route::Post('/authors/edit/{id}', [AuthorsController::class, 'editAuthors']);

Route::get('/books', [BooksController::class, 'showBooks']);
Route::Post('/books', [BooksController::class, 'putBooks']);
Route::get('/books/{id}', [BooksController::class, 'deleteBooks']);
Route::get('/books/edit/{id}', [BooksController::class, 'showForEditBooks']);
Route::Post('/books/edit/{id}', [BooksController::class, 'editBooks']);

Route::get('/borrows', [BorrowsController::class, 'showBorrows']);
Route::Post('/borrows', [BorrowsController::class, 'putBorrows']);
Route::get('/borrows/{id}', [BorrowsController::class, 'deleteBorrows']);
Route::get('/borrows/edit/{id}', [BorrowsController::class, 'showForEditBorrows']);
Route::Post('/borrows/edit/{id}', [BorrowsController::class, 'editBorrows']);




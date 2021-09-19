<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

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

Route::get('/', [LibraryController::class, 'show']);
Route::get('/authors', [LibraryController::class, 'showAuthors']);
Route::get('/books', [LibraryController::class, 'showBooks']);
Route::get('/borrows', [LibraryController::class, 'showBorrows']);
Route::get('/students', [LibraryController::class, 'showStudents']);
Route::get('/types', [LibraryController::class, 'showTypes']);



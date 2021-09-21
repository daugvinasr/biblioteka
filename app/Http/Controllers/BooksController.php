<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    public function showBooks()
    {
        $booksData = DB::select( DB::raw("SELECT books.name as title, books.pageCount, types.name as type, authors.name as name , authors.surname FROM books JOIN types on books.id_books = types.id_types JOIN authors on books.id_books = authors.id_authors"));
        Session::put('activeNav','books');
        return view('books', ['booksData' => $booksData]);
    }
}

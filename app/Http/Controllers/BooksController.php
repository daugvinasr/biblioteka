<?php

namespace App\Http\Controllers;

use App\Models\authors;
use App\Models\books;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    public function showBooks()
    {
        $booksData = DB::select('SELECT books.name as title, books.pageCount, types.name as type, authors.name as name, books.id_books FROM books JOIN authors on books.fk_authorsid = authors.id_authors JOIN types on books.fk_typesid = types.id_types');
        $typesData = DB::select('SELECT types.id_types, types.name FROM types');
        $namesData = DB::select('SELECT authors.id_authors, authors.name FROM authors');
        Session::put('activeNav', 'books');
        return view('books', ['booksData' => $booksData, 'typesData' => $typesData, 'namesData' => $namesData]);
    }

    public function putBooks()
    {
        DB::insert( 'INSERT INTO `books` (`name`,`pageCount`,`fk_typesid`,`fk_authorsid`) VALUES (?,?,?,?)',[request('name'),request('pageCount'),request('fk_typesid'),request('fk_authorsid')]);
        return redirect('/books');
    }

    public function deleteBooks($id)
    {
        books::where('id_books','=',$id)->delete();
        return redirect('/books');
    }
}

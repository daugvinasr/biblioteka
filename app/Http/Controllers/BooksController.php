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

    public function showForEditBooks($id)
    {
        $queryFillInData = 'SELECT * FROM books WHERE id_books = '. $id;
        $fillInData = DB::select($queryFillInData);

        $queryFirstDropDown = "SELECT types.name as type, authors.name as name, types.id_types, authors.id_authors FROM books JOIN authors on books.fk_authorsid = authors.id_authors JOIN types on books.fk_typesid = types.id_types WHERE books.id_books = " . $id;
        $firstDropDown = DB::select($queryFirstDropDown);

        $queryAuthorsNamesDropDownNoRepeat = 'SELECT authors.id_authors, authors.name FROM authors WHERE NOT authors.id_authors = '. $firstDropDown[0] -> id_authors;
        $AuthorsNamesDropDownNoRepeat = DB::select($queryAuthorsNamesDropDownNoRepeat);

        $queryTypesNamesDropDownNoRepeat = "SELECT types.id_types, types.name FROM types WHERE NOT types.id_types = " . $firstDropDown[0] -> id_types;
        $TypesNamesDropDownNoRepeat = DB::select($queryTypesNamesDropDownNoRepeat);
        return view('booksEdit', ['fillInData' => $fillInData, 'TypesNamesDropDownNoRepeat' => $TypesNamesDropDownNoRepeat, 'AuthorsNamesDropDownNoRepeat' => $AuthorsNamesDropDownNoRepeat, 'firstDropDown' => $firstDropDown]);
    }

    public function editBooks()
    {
        $querry = 'UPDATE books SET name = ' . "'" . request('name') . "'" . ",". "pageCount = " . "'" . request('pageCount') . "'" . ",". "fk_typesid = " . "'" . request('fk_typesid') . "'" . ",". "fk_authorsid =" . "'" . request('fk_authorsid') . "'" . " ". ' WHERE id_books = ' . request('id_books');
        DB::update($querry);
        return redirect('/books');
    }

}

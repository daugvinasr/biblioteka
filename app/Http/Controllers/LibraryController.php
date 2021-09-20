<?php

namespace App\Http\Controllers;

use App\Models\borrows;
use App\Models\students;
use App\Models\types;
use App\Models\authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LibraryController extends Controller
{
    public function show()
    {
        return view('start');
    }

    public function showAuthors()
    {
        $authorsData = authors::all();
        return view('authors', ['authorsData' => $authorsData]);
    }

    public function showBooks()
    {

        $booksData = DB::select( DB::raw("SELECT books.name as title, books.pageCount, types.name as type, authors.name as name , authors.surname FROM books JOIN types on books.id_books = types.id_types JOIN authors on books.id_books = authors.id_authors"));
        return view('books', ['booksData' => $booksData]);
    }

    public function showBorrows()
    {
        $borrowsData = DB::select( DB::raw("SELECT borrows.takenDate, borrows.broughtDate, students.name, students.surname, books.name as title FROM borrows JOIN students on borrows.id_borrows = students.id_students JOIN books on borrows.id_borrows = books.id_books"));
        return view('borrows', ['borrowsData' => $borrowsData]);
    }

    public function showStudents()
    {
        $studentsData = students::all();
        return view('students', ['studentsData' => $studentsData]);
    }

    public function showTypes()
    {
        $typesData = types::all();
        return view('types', ['typesData' => $typesData]);
    }
}

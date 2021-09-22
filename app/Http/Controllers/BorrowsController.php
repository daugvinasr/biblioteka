<?php

namespace App\Http\Controllers;

use App\Models\borrows;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BorrowsController extends Controller
{
    public function showBorrows()
    {
        $borrowsData = DB::select( DB::raw("SELECT borrows.id_borrows, borrows.takenDate, borrows.broughtDate, students.name, books.name as title FROM borrows JOIN students on borrows.fk_studentsid = students.id_students JOIN books on borrows.fk_booksid = books.id_books"));
        $studentsData = DB::select('SELECT students.id_students, students.name FROM students');
        $booksData = DB::select('SELECT books.id_books, books.name FROM books');
        Session::put('activeNav','borrows');
        return view('borrows', ['borrowsData' => $borrowsData,'studentsData' => $studentsData, 'booksData' => $booksData]);
    }

    public function putBorrows()
    {
        DB::insert( 'INSERT INTO `borrows` (`takenDate`,`broughtDate`,`fk_studentsid`,`fk_booksid`) VALUES (?,?,?,?)',[request('takenDate'),request('broughtDate'),request('fk_studentsid'),request('fk_booksid')]);
        return redirect('/borrows');
    }

    public function deleteBorrows($id)
    {
        borrows::where('id_borrows','=',$id)->delete();
        return redirect('/borrows');
    }

    public function showForEditBorrows($id)
    {
        $query = 'SELECT * FROM borrows WHERE id_borrows = '. $id;
        $borrowsData = DB::select($query);


        $queryForRealStudentsNames = "SELECT students.name as name, books.name as title, students.id_students, books.id_books FROM borrows JOIN students on borrows.fk_studentsid = students.id_students JOIN books on borrows.fk_booksid = books.id_books WHERE borrows.id_borrows = " . $id;
        $realStudentsNames = DB::select($queryForRealStudentsNames);

        $queryForRealAuthorsNames = 'SELECT books.id_books, books.name FROM books WHERE NOT books.id_books = '. $realStudentsNames[0] -> id_books;
        $namesData = DB::select($queryForRealAuthorsNames);

        $aa = "SELECT students.id_students, students.name FROM students WHERE NOT students.id_students = " . $realStudentsNames[0] -> id_students;
        $typesData = DB::select($aa);
        return view('borrowsEdit', ['borrowsData' => $borrowsData, 'typesData' => $typesData, 'namesData' => $namesData, 'realStudentsNames' => $realStudentsNames]);
    }

    public function editBorrows()
    {
        $querry = 'UPDATE books SET name = ' . "'" . request('name') . "'" . ",". "pageCount = " . "'" . request('pageCount') . "'" . ",". "fk_typesid = " . "'" . request('fk_typesid') . "'" . ",". "fk_authorsid =" . "'" . request('fk_authorsid') . "'" . " ". ' WHERE id_books = ' . request('id_books');
        DB::update($querry);
        return redirect('/borrows');
    }

}

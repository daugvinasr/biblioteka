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
        $queryFillInData = 'SELECT * FROM borrows WHERE id_borrows = '. $id;
        $fillInData = DB::select($queryFillInData);

        $queryFirstDropDown = "SELECT students.name as name, books.name as title, students.id_students, books.id_books FROM borrows JOIN students on borrows.fk_studentsid = students.id_students JOIN books on borrows.fk_booksid = books.id_books WHERE borrows.id_borrows = " . $id;
        $firstDropDown= DB::select($queryFirstDropDown);

        $queryBookNamesDropDownNoRepeat = 'SELECT books.id_books, books.name FROM books WHERE NOT books.id_books = '. $firstDropDown[0] -> id_books;
        $BookNamesDropDownNoRepeat = DB::select($queryBookNamesDropDownNoRepeat);

        $queryStudentNamesDropDownNoRepeat = "SELECT students.id_students, students.name FROM students WHERE NOT students.id_students = " . $firstDropDown[0] -> id_students;
        $StudentNamesDropDownNoRepeat = DB::select($queryStudentNamesDropDownNoRepeat);

        return view('borrowsEdit', ['fillInData' => $fillInData, 'StudentNamesDropDownNoRepeat' => $StudentNamesDropDownNoRepeat, 'BookNamesDropDownNoRepeat' => $BookNamesDropDownNoRepeat, 'firstDropDown' => $firstDropDown]);
    }

    public function editBorrows()
    {
        $querry = 'UPDATE borrows SET takenDate = ' . "'" . request('takenDate') . "'" . ",". "broughtDate = " . "'" . request('broughtDate') . "'" . ",". "fk_studentsid = " . "'" . request('fk_studentsid') . "'" . ",". "fk_booksid =" . "'" . request('fk_booksid') . "'" . " ". ' WHERE id_borrows = ' . request('id_borrows');
        DB::update($querry);
        return redirect('/borrows');
    }

}

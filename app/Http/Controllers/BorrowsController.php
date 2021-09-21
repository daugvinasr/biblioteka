<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BorrowsController extends Controller
{
    public function showBorrows()
    {
        $borrowsData = DB::select( DB::raw("SELECT borrows.takenDate, borrows.broughtDate, students.name, books.name as title FROM borrows JOIN students on borrows.id_borrows = students.id_students JOIN books on borrows.id_borrows = books.id_books"));
        Session::put('activeNav','borrows');
        return view('borrows', ['borrowsData' => $borrowsData]);
    }
}

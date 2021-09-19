<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\borrows;
use App\Models\students;
use App\Models\types;
use App\Models\authors;
use Illuminate\Http\Request;


class BorrowController extends Controller
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
        $booksData = books::all();
        return view('books', ['booksData' => $booksData]);
    }

    public function showBorrows()
    {
        $borrowsData = borrows::all();
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

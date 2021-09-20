<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function showStudents()
    {
        $studentsData = students::paginate(11);
        Session::put('activeNav','students');
        return view('students', ['studentsData' => $studentsData]);
    }
}

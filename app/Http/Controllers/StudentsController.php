<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function showStudents()
    {
        $studentsData = students::paginate(11);
        Session::put('activeNav','students');
        return view('students', ['studentsData' => $studentsData]);
    }

    public function putStudents()
    {
        DB::insert( 'INSERT INTO `students` (`name`,`birthdate`,`studyProgramme`) VALUES (?,?,?)',[request('name'),request('birthdate'),request('studyProgramme')]);
        $authorsData = students::all();
        Session::put('activeNav','students');
        return redirect('/students');
    }

    public function deleteStudents($id)
    {
        students::where('id_students','=',$id)->delete();
        return redirect('/students');
    }

    public function showForEditStudents($id)
    {
        $querry = 'SELECT * FROM students WHERE id_students = '. $id;
        $studentsData = DB::select($querry);
        return view('studentsEdit',['studentsData' => $studentsData]);
    }

    public function editStudents()
    {
        $querry = 'UPDATE students SET ' . 'name = ' . "'" . request('name') . "'," . ' birthdate = ' . "'" . request('birthdate') . "',"  . ' studyProgramme = ' . "'" . request('studyProgramme') . "' " . ' WHERE id_students = ' . request('id_students');
        DB::update($querry);
        return redirect('/students');
    }
}

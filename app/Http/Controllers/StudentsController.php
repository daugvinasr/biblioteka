<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function showStudents()
    {
        $studentsData = students::paginate(10);
        Session::put('activeNav','students');
        return view('students', ['studentsData' => $studentsData]);
    }

    public function putStudents()
    {
        request()->validate([
            'name' => 'required',
            'birthdate' => 'required|date',
            'studyProgramme' => 'required'
        ]);

        $students = new students();
        $students->name = request('name');
        $students->birthdate = request('birthdate');
        $students->studyProgramme = request('studyProgramme');
        $students->save();

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
        $studentsData = students::where('id_students','=',$id)->get();
        return view('studentsEdit',['studentsData' => $studentsData]);
    }

    public function editStudents()
    {
        request()->validate([
            'name' => 'required',
            'birthdate' => 'required|date',
            'studyProgramme' => 'required'
        ]);

        $studentsData = students::where('id_students', request('id_students'));
        $studentsData->update(['name' => request('name'),'birthdate' => request('birthdate'),'studyProgramme' => request('studyProgramme')]);

        return redirect('/students');
    }
}

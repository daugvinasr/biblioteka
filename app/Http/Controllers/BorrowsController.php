<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\borrows;
use App\Models\students;
use Illuminate\Support\Facades\Session;

class BorrowsController extends Controller
{
    public function showBorrows()
    {

        $borrowsData = borrows::all();
        $studentsData = students::all();
        $booksData = books::all();


        Session::put('activeNav','borrows');
        return view('borrows', ['borrowsData' => $borrowsData,'studentsData' => $studentsData, 'booksData' => $booksData]);
    }

    public function putBorrows()
    {
        request()->validate([
            'takenDate' => 'required|date',
            'broughtDate' => 'required|date'
        ]);

        $borrows = new borrows();
        $borrows->takenDate = request('takenDate');
        $borrows->broughtDate = request('broughtDate');
        $borrows->fk_studentsid = request('fk_studentsid');
        $borrows->fk_booksid = request('fk_booksid');
        $borrows->save();

        return redirect('/borrows');
    }

    public function deleteBorrows($id)
    {
        borrows::where('id_borrows','=',$id)->delete();
        return redirect('/borrows');
    }

    public function showForEditBorrows($id)
    {
        $fillInData = borrows::where('id_borrows','=',$id)->get();
        $BookNamesDropDownNoRepeat = books::where('id_books','!=',$fillInData[0]->fk_booksid)->get();
        $StudentNamesDropDownNoRepeat = students::where('id_students','!=',$fillInData[0]->fk_studentsid)->get();

        return view('borrowsEdit', ['fillInData' => $fillInData, 'StudentNamesDropDownNoRepeat' => $StudentNamesDropDownNoRepeat, 'BookNamesDropDownNoRepeat' => $BookNamesDropDownNoRepeat]);
    }

    public function editBorrows()
    {
        request()->validate([
            'takenDate' => 'required|date',
            'broughtDate' => 'required|date'
        ]);

        $borrowsData = borrows::where('id_borrows', request('id_borrows'));
        $borrowsData->update(['takenDate' => request('takenDate'), 'broughtDate' => request('broughtDate'), 'fk_studentsid' => request('fk_studentsid'), 'fk_booksid' => request('fk_booksid')]);

        return redirect('/borrows');
    }

}

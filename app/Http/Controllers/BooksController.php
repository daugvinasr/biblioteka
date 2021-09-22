<?php

namespace App\Http\Controllers;

use App\Models\authors;
use App\Models\books;
use App\Models\types;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    public function showBooks()
    {
        $booksData = books::all();
        $typesData = types::all();
        $authorData = authors::all();
        Session::put('activeNav', 'books');
        return view('books',['booksData' => $booksData, 'typesData' => $typesData, 'authorData' => $authorData]);
    }

    public function putBooks()
    {
        request()->validate([
            'name' => 'required|max:254',
            'pageCount' => 'required|max:254|integer'
        ]);

        $books = new books();
        $books->name = request('name');
        $books->pageCount = request('pageCount');
        $books->fk_typesid = request('fk_typesid');
        $books->fk_authorsid = request('fk_authorsid');
        $books->save();

        return redirect('/books');
    }

    public function deleteBooks($id)
    {
        books::where('id_books','=',$id)->delete();
        return redirect('/books');
    }

    public function showForEditBooks($id)
    {
        $fillInData = books::where('id_books','=',$id)->get();
        $TypesNamesDropDownNoRepeat = types::where('id_types','!=',$fillInData[0]->fk_typesid)->get();
        $AuthorsNamesDropDownNoRepeat = authors::where('id_authors','!=',$fillInData[0]->fk_authorsid)->get();

        return view('booksEdit', ['fillInData' => $fillInData, 'TypesNamesDropDownNoRepeat' => $TypesNamesDropDownNoRepeat, 'AuthorsNamesDropDownNoRepeat' => $AuthorsNamesDropDownNoRepeat]);
    }

    public function editBooks()
    {
        request()->validate([
            'name' => 'required|max:254',
            'pageCount' => 'required|integer'
        ]);

        $booksData = books::where('id_books', request('id_books'));
        $booksData->update(['name' => request('name'), 'pageCount' => request('pageCount'), 'fk_typesid' => request('fk_typesid'), 'fk_authorsid' => request('fk_authorsid')]);

        return redirect('/books');
    }

}

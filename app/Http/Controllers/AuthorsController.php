<?php

namespace App\Http\Controllers;

use App\Models\authors;
use Illuminate\Support\Facades\Session;

class AuthorsController extends Controller
{
    public function showAuthors()
    {
        $authorsData = authors::paginate(10);

        Session::put('activeNav','authors');
        return view('authors', ['authorsData' => $authorsData]);
    }

    public function putAuthors()
    {
        request()->validate([
            'name' => 'required|max:254'
        ]);

        $authors = new authors();
        $authors->name = request('name');
        $authors->save();

        Session::put('activeNav','authors');
        return redirect('/authors');
    }

    public function deleteAuthors($id)
    {
        authors::where('id_authors','=',$id)->delete();
        return redirect('/authors');
    }

    public function showForEditAuthors($id)
    {
        $authorsData = authors::where('id_authors','=',$id)->get();
        return view('authorsEdit',['authorsData' => $authorsData]);
    }

    public function editAuthors()
    {
        request()->validate([
            'name' => 'required|max:254'
        ]);

        $authorsData = authors::where('id_authors', request('id_authors'));
        $authorsData->update(['name' => request('name')]);
        return redirect('/authors');
    }





}

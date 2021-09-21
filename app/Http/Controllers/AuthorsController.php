<?php

namespace App\Http\Controllers;

use App\Models\authors;
use http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthorsController extends Controller
{
    public function showAuthors()
    {
        $authorsData = authors::all();
        Session::put('activeNav','authors');
        return view('authors', ['authorsData' => $authorsData]);
    }

    public function putAuthors()
    {
        DB::insert( 'INSERT INTO `authors` (`name`, `surname`) VALUES (?, ?)',[request('name'),request('surname')]);
        $authorsData = authors::all();
        Session::put('activeNav','authors');
        return view('authors', ['authorsData' => $authorsData]);
    }

    public function deleteAuthors($id)
    {
        authors::where('id_authors','=',$id)->delete();
        return redirect('/authors');
    }

    public function showForEditAuthors($id)
    {
        $querry = 'SELECT * FROM authors WHERE id_authors = '. $id;
        $authorsData = DB::select($querry);
        return view('authorsEdit',['authorsData' => $authorsData]);
    }

    public function editAuthors($id)
    {
        $querry = 'UPDATE authors SET name = ' . "'" . request('name') . "'" . ', ' . 'surname = ' . "'" . request('surname') . "'" . ' WHERE id_authors = ' . request('id_authors');
        DB::update($querry);
        return redirect('/authors');
    }





}

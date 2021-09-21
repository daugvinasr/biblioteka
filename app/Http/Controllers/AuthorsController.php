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
    {   error_log('penisssssssssssssssss authors');
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



}

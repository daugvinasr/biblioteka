<?php

namespace App\Http\Controllers;

use App\Models\authors;
use Illuminate\Support\Facades\Session;

class AuthorsController extends Controller
{
    public function showAuthors()
    {
        $authorsData = authors::all();
        Session::put('activeNav','authors');
        return view('authors', ['authorsData' => $authorsData]);
    }
}

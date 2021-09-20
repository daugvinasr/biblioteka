<?php

namespace App\Http\Controllers;

use App\Models\types;
use Illuminate\Support\Facades\Session;

class TypesController extends Controller
{
    public function showTypes()
    {
        $typesData = types::all();
        Session::put('activeNav','types');
        return view('types', ['typesData' => $typesData]);
    }
}

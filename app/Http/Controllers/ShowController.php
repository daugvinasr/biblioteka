<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;


class ShowController extends Controller
{
    public function show()
    {
        Session::put('activeNav','home');
        return view('start');
    }










}

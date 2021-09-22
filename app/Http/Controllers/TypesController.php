<?php

namespace App\Http\Controllers;

use App\Models\types;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TypesController extends Controller
{
    public function showTypes()
    {
        $typesData = types::all();
        Session::put('activeNav','types');
        return view('types', ['typesData' => $typesData]);
    }

    public function putTypes()
    {
        DB::insert( 'INSERT INTO `types` (`name`) VALUES (?)',[request('name')]);
        Session::put('activeNav','types');
        return redirect('/types');
    }

    public function deleteTypes($id)
    {
        types::where('id_types','=',$id)->delete();
        return redirect('/types');
    }

    public function showForEditTypes($id)
    {
        $querry = 'SELECT * FROM types WHERE id_types = '. $id;
        $typesData = DB::select($querry);
        return view('typesEdit',['typesData' => $typesData]);
    }

    public function editTypes()
    {
        $querry = 'UPDATE types SET name = ' . "'" . request('name') . "'" . ' WHERE id_types = ' . request('id_types');
        DB::update($querry);
        return redirect('/types');
    }

}

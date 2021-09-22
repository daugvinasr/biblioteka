<?php

namespace App\Http\Controllers;

use App\Models\types;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TypesController extends Controller
{
    public function showTypes()
    {
        $typesData = types::paginate(10);
        Session::put('activeNav','types');
        return view('types', ['typesData' => $typesData]);
    }

    public function putTypes()
    {
        request()->validate([
            'name' => 'required|max:254'
        ]);

        $types = new types();
        $types->name = request('name');
        $types->save();

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
        $typesData = types::where('id_types','=',$id)->get();
        return view('typesEdit',['typesData' => $typesData]);
    }

    public function editTypes()
    {
        request()->validate([
            'name' => 'required|max:254'
        ]);

        $typesData = types::where('id_types', request('id_types'));
        $typesData->update(['name' => request('name')]);
        return redirect('/types');
    }

}

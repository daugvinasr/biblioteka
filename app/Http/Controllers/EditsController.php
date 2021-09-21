<?php

namespace App\Http\Controllers;

use App\Models\authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EditsController extends Controller
{

    public function edits($tableName,$id)
    {
        error_log('vaaarau per edits');
        $idName = "id_" . $tableName;
        $querry = 'SELECT * FROM ' . $tableName . ' WHERE ' . $idName . ' = ' . $id;
        $editsData = DB::select($querry);
        $arrayKeys = array_keys($editsData);
        Session::put('activeNav','edits');
        return view('edits', ['editsData' => $editsData,'tableName' => $tableName ]);
    }

    public function putEdits($tableName)
    {
        $idName = "id_" . $tableName;
        $querry = 'SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = ' . "'" . $tableName . "'";
        $putEdits = DB::select($querry);
        $querryEdit = 'UPDATE ' . $tableName . ' SET ';
        $reikiamasID = "";
        foreach ($putEdits as $daugvinas)
        {
            foreach ($daugvinas as $test)
            {

                if (str_contains($test, 'id_') )
                {
                    $reikiamasID = request($test);
                }
                else
                {
                    $querryEdit = $querryEdit . $test . ' = ' . "'" . request($test) . "'" . ',';
                }
            }
        }
        $querryEdit = substr($querryEdit, 0, -1);
        $querryEdit = $querryEdit . ' WHERE ' . $idName . ' = ' . $reikiamasID;
        DB::update($querryEdit);
        Session::put('activeNav','edits');
        error_log('edittttttttttttt penis');
        return redirect('/'.$tableName);
    }
}

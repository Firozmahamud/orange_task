<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\FilesExport;

use App\Imports\FilesImport;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\File;

class ImportExportController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request)
    {
        $validatedData = $request->validate([

           'file' => 'required',

        ]);

        Excel::import(new FilesImport,$request->file('file'));


        return redirect('import-excel-csv')->with('status', 'The file has been imported in laravel 8');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export($slug)
    {
        return Excel::download(new FilesExport, 'users.'.$slug);
    }

}

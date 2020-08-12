<?php

namespace App\Http\Controllers;

use App\Imports\BookImport;
use Illuminate\Http\Request;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
   public function imp(){
       return view('import');
   }
    public function csv_import()
    {
        Excel::import( new BookImport(), request()->file('file'));
        return back();
    }
}

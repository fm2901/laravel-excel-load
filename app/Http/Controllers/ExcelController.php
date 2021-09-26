<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Maatwebsite\Excel\Facades\Excel as Excel;
use App\Models\Row;

class ExcelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rows = Row::all();
        return view('excel.index', ['rows' => $rows]);
    }

    public function upload()
    {
        return view('excel.excel');
    }

    public function excelUpload(Request $request)
    {
        DB::table('rows')->truncate();

        $updateFile = $request->file('ex_file');
        $filePath = $updateFile->getRealPath();
        Excel::queueImport(new ExcelImport, $filePath);

        return redirect()->route('excel');
    }
}

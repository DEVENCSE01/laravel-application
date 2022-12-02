<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\ExcelExport;
use App\Imports\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Employee;
  
class ExcelController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        // $employees = Employee::get();
        // return view('excel', compact('employees'));

        return view('excel');
    }
        
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ExcelExport, 'Employees.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ExcelImport,request()->file('file'));
               
        return redirect('excel')->with('status', 'File exported Successfully');
    }
}
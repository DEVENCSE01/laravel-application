<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Employee;
 
 
class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
          'name' => 'required|min:5',
          'email' => 'required|unique:employees|max:255',
          'contact_no' => 'required|unique:employees|max:10|min:10',
        ]);
 
        $emp = new Employee;
 
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->contact_no = $request->contact_no;
 
        $emp->save();
 
        return redirect('form')->with('status', 'Form Data Has Been Inserted');
 
    }
}
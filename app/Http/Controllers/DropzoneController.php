<?php
  
namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
 
class DropzoneController extends Controller
{
    
    public function index()
    {
        return view('dropzone');
    }
      
    
    public function store(Request $req)
    {

        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,docx|max:2048'
        ]);

        $fileModel = new File;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return redirect('/file')->with('status','File has been uploaded.')->with('file', $fileName);
        }

    }
}

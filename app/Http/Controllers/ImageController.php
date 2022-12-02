<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Exception;

class ImageController extends Controller
{

    public function imageform()
    {
        return view('uploadImage');
    }

    public function UserImageUpload($query)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        $image_name = $randstring;
        $ext = strtolower($query->getClientOriginalExtension()); 
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'image/';    
        $image_url = $upload_path.$image_full_name;
        $success = $query->move($upload_path,$image_full_name);
 
        return $image_url; 
    }

    public function store(Request $request){

        $validateImage = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = new Image;
        $data->image = $request->image;
    
        if($data->image){
            try{
                $filePath = $this->UserImageUpload($data->image);
                $data->image = $filePath;
                $data->save();
                
                return redirect('upload-image')->with('status', 'Image Uploaded Successfully');

            } catch (Exception $e){

            }
        }
    }
}

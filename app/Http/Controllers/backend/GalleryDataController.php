<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;


class GalleryDataController extends Controller
{
    public function index(){
        return view('backend.gallery');
    }
     // insert data in datebase
     public function store(Request $request){

            $gallery = new Gallery;
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('backend/images/',$filename);
            $gallery->image = $filename;
            $gallery ->save();
            return redirect()->back()->with('status','Data Insert Successfully');
    }
    // fetch data in datebase
    public function show(){
        $show = Gallery::orderBy('id', 'DESC')->paginate(7);
        return view('backend.gallery',compact('show'));
    }
      // edit data
      public function edit($id){
        $edit = Gallery::find($id);
        return view('backend.editgallery',compact('edit'));
    }

    // update data
    public function update(Request $request,$id){
        $update = Gallery::find($id);
        if ($request->hasfile('image')){
            $destination = 'backend/images/'.$update->image;
                if (File::exists($destination))
                {
                    File::delete($destination);
                }
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('backend/images/',$filename);
            $update->image = $filename;
        }
        $update->update();
        return redirect('/galleries')->with('status','Data Update Successfully');
    }

    // delete data
    public function destroy($id){
        $delete = Gallery::find($id);
        $destination = 'backend/images/'.$delete->image;
        if (File::exists($destination))
            {
            File::delete($destination);
            }
    $delete->delete();
    return redirect('/galleries')->with('status','Data Delete Successfully');
    }

}

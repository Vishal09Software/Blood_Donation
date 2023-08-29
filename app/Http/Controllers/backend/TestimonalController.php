<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Testimonal;


class TestimonalController extends Controller
{
    public function index(){
        return view('backend.testimonal_slider');
    }

     // insert data in datebase
     public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'paragraph'=>'required',
            'image'=>'required'

    ]);

        $insert = new Testimonal;
        $insert->name = $request->input('name');
        $insert->paragraph = $request->input('paragraph');

        if ($request->hasfile('image')){
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('backend/images/',$filename);
            $insert->image = $filename;
        }
        $insert ->save();
        return redirect()->back()->with('status','Data Insert Successfully');
    }

      // fetch data in datebase
      public function show(){
        $show = Testimonal::orderBy('id', 'DESC')->paginate(7);
        return view('backend.testimonal_slider',compact('show'));
    }

    // edit data
    public function edit($id){
        $edit = Testimonal::find($id);
        return view('backend.edittestimonal_slider',compact('edit'));
    }
// update data
    public function update(Request $request,$id){
        $update = Testimonal::find($id);
        $update->name = $request->input('name');
        $update->paragraph = $request->input('paragraph');
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
        return redirect('/testimonal_slider')->with('status','Data Update Successfully');
}

     // delete data
    public function destroy($id){
    $delete = Testimonal::find($id);
    $destination = 'backend/images/'.$delete->image;
    if (File::exists($destination))
        {
         File::delete($destination);
        }
    $delete->delete();
    return redirect('/testimonal_slider')->with('status','Data Delete Successfully');
}
}

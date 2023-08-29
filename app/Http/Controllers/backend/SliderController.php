<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Slider;


class SliderController extends Controller
{
    public function index(){
        return view('backend.slider');
    }

      // insert data in datebase
    public function store(Request $request){
        $request->validate([
            'heading'=>'required',
            'paragraph'=>'required',
            'status'=>'required',
            'image'=>'required'

    ]);

        $insert = new Slider;
        $insert->heading = $request->input('heading');
        $insert->paragraph = $request->input('paragraph');
        $insert->status = $request->input('status');

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
            $show = Slider::orderBy('id', 'DESC')->paginate(7);
            return view('backend.slider',compact('show'));
    }

    // edit data
    public function edit($id){
        $edit = Slider::find($id);
        return view('backend.editslider',compact('edit'));
    }
// update data
    public function update(Request $request,$id){
        $update = Slider::find($id);
        $update->heading = $request->input('heading');
        $update->paragraph = $request->input('paragraph');
        $update->status = $request->status ;
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
        return redirect('/slider')->with('status','Data Update Successfully');
}

     // delete data
    public function destroy($id){
    $delete = Slider::find($id);
    $destination = 'backend/images/'.$delete->image;
    if (File::exists($destination))
        {
         File::delete($destination);
        }
    $delete->delete();
    return redirect('/slider')->with('status','Data Delete Successfully');
}
}

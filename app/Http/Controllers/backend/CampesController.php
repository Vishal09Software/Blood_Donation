<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campes;


class CampesController extends Controller
{
    public function index(){
        return view('backend.campes');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'organised_by'=>'required',
            'date'=>'required',
            'address'=>'required',
            'city'=>'required',
            'address'=>'required',
            'state'=>'required',
            'person'=>'required',
            'number'=>'required|digits_between:10,10',
        ]);

        $insert = new Campes;
        $insert->name= $request['name'];
        $insert->organised_by= $request['organised_by'];
        $insert->date= $request['date'];
        $insert->address= $request['address'];
        $insert->city= $request['city'];
        $insert->state= $request['state'];
        $insert->person= $request['person'];
        $insert->number= $request['number'];
        $insert->status= $request['status'];
        $insert->save();
        return redirect()->back()->with('status','Data Save Successfully');
    }

        // fetch data in datebase
        public function show(){
            $show = Campes::orderBy('id', 'DESC')->paginate(7);
            return view('backend.campes',compact('show'));
    }

      // edit data
      public function edit($id){
        $campes = Campes::find($id);
        return view('backend.editcampes',compact('campes'));
    }

    // update data
        public function update(Request $request,$id){
            $update = Campes::find($id);
            $update->name= $request['name'];
            $update->organised_by= $request['organised_by'];
            $update->date= $request['date'];
            $update->address= $request['address'];
            $update->city= $request['city'];
            $update->state= $request['state'];
            $update->person= $request['person'];
            $update->number= $request['number'];
            $update->status= $request['status'] ;
            $update->update();
            return redirect('/camp')->with('status','Data Update Successfully');
        }

        public function destroy($id){
            $delete = Campes::find($id);
            $delete->delete();
            return redirect('/camp')->with('status','Data Delete Successfully');
        }

}

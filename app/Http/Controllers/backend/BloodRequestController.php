<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodRequest;

class BloodRequestController extends Controller
{
    //
    public function index(){
        return view('backend.blood_request');
    }

    public function show(){
        $show = BloodRequest::orderBy('id', 'DESC')->paginate(7);
        return view('backend.blood_request',compact('show'));
    }

    // edit data
    public function edit($id){
        $brequest = BloodRequest::find($id);
        return view('backend.editblood_request',compact('brequest'));
    }


// update data
    public function update(Request $request,$id){
    $update = BloodRequest::find($id);
    $update->name = $request->input('name');
    $update->number = $request->input('number');
    $update->location = $request->input('location');
    $update->dob = $request->input('dob');
    $update->blood_group = $request->input('blood_group');
    $update->unit = $request->input('unit');
    $update->status = $request->status;
    $update->update();
    return redirect('/blood_request')->with('status','Data Update Successfully');
    }



    public function destroy($id){
        $delete = BloodRequest::find($id);
        $delete->delete();
        return redirect('/blood_request')->with('status','Data Delete Successfully');
    }

    public function updateStatus(Request $request, $id)
    {
        $blood_request = BloodRequest::find($id);
        $blood_request->status = 'Complete';
        $blood_request->save();

        return redirect()->back();
    }
}

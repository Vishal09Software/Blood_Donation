<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodBank;


class BloodbankController extends Controller
{
    public function index(){
        return view('backend.blood_bank');
    }

    public function store(Request $request){
        $request->validate([
            'hname'=>'required',
            'cname'=>'required',
            'organised_by'=>'required',
            'number'=>'required|numeric|digits_between:10,10',
            'city'=>'required',
            'state'=>'required',
        ]);

        $bloodbank = new BloodBank;
        $bloodbank->hname= $request['hname'];
        $bloodbank->cname= $request['cname'];
        $bloodbank->organised_by= $request['organised_by'];
        $bloodbank->number= $request['number'];
        $bloodbank->city= $request['city'];
        $bloodbank->state= $request['state'];
        $bloodbank->save();
        return redirect()->back()->with('status','Data Save Successfully');
    }

    public function show(){
        $show = BloodBank::orderBy('id', 'DESC')->paginate(7);
        return view('backend.blood_bank',compact('show'));
    }

    // edit data
    public function edit($id){
        $bloodbank = BloodBank::find($id);
        return view('backend.editblood_bank',compact('bloodbank'));
    }


// update data
    public function update(Request $request,$id){

        $request->validate([
            'hname'=>'required',
            'cname'=>'required',
            'organised_by'=>'required',
            'number'=>'required|numeric|digits_between:10,10',
            'city'=>'required',
            'state'=>'required',
        ]);

    $update = BloodBank::find($id);
    $update->hname = $request->input('hname');
    $update->cname = $request->input('cname');
    $update->organised_by = $request->input('organised_by');
    $update->number = $request->input('number');
    $update->city = $request->input('city');
    $update->state = $request->input('state');
    $update->update();
    return redirect('/blood_bank')->with('status','Data Update Successfully');
    }



    public function destroy($id){
        $delete = BloodBank::find($id);
        $delete->delete();
        return redirect('/blood_bank')->with('status','Data Delete Successfully');
    }

}

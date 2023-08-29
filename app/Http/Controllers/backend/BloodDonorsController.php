<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\BloodDonors;
use App\Models\States;
use App\Models\Cities;


class BloodDonorsController extends Controller
{

    public function index(){
        return view('backend.blood_donors');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'number'=>'required|numeric|digits_between:10,10',
            'state'=>'required',
            'city'=>'required',
            'blood_group'=>'required',
            'gender'=>'required',
            'unit'=>'required',
            'image'=>'required',
        ]);

        $bdonors = new BloodDonors;
        $bdonors->name= $request['name'];
        $bdonors->number= $request['number'];
        $bdonors->city= $request['city'];
        $bdonors->state= $request['state'];
        $bdonors->blood_group= $request['blood_group'];
        $bdonors->gender= $request['gender'];
        $bdonors->ldb= $request['ldb'];
        $bdonors->unit= $request['unit'];
        $bdonors->status= 'Complete';
        if ($request->hasfile('image')){
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('backend/images/',$filename);
            $bdonors->image = $filename;
        }
        $bdonors->save();
        return redirect()->back()->with('status','Data Save Successfully');
    }

    public function show(){

        // Getting data
        $state = States::all();
        $city = Cities::all();
        $blooddonors = BloodDonors::orderBy('id', 'DESC')->paginate(7);

        // Assigning to data
        $data = [
            'all_states'=> $state,
            'all_cities'=> $city,
            'blooddonors'=>$blooddonors
        ];
        // Returning to view
        return view('backend.blood_donors',$data);
    }

    // edit data
    public function edit($id){
        // $donor = BloodDonors::find($id);
        // return view('backend.editblood_donor',compact('donor'));

        // Getting data
        $donor = BloodDonors::find($id);
        $state = States::all();
        $city = Cities::all();

        // Assigning to data
        $data = [
            'all_states'=> $state,
            'all_cities'=> $city,
            'blooddonors'=>$donor
        ];
        // Returning to view
        return view('backend.editblood_donor',$data);
    }


    // update data
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'number'=>'required|numeric|digits_between:10,10',
            'city'=>'required',
            'state'=>'required',
            'blood_group'=>'required',
            'gender'=>'required',
            'unit'=>'required',
        ]);

        $update = BloodDonors::find($id);
        $update->name = $request->input('name');
        $update->number = $request->input('number');
        $update->city = $request->input('city');
        $update->state = $request->input('state');
        $update->blood_group = $request->input('blood_group');
        $update->gender = $request->input('gender');
        $update->ldb = $request->input('ldb');
        $update->unit = $request->input('unit');
        $update->status = $request->status;
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
        return redirect('/blood_donors')->with('status','Data Update Successfully');
    }

    public function destroy($id){
        $delete = BloodDonors::find($id);
        $destination = 'backend/images/'.$delete->image;
        if (File::exists($destination))
            {
            File::delete($destination);
            }
    $delete->delete();
    return redirect('/blood_donors')->with('status','Data Delete Successfully');
    }

    public function updateStatus(Request $request, $id)
    {
        $blooddonors = BloodDonors::find($id);
        $blooddonors->status = 'Complete';
        $blooddonors->save();

        return redirect()->back();
    }

    public function getCity(Request $request)
    {
        $state_code = $request->get('state_code');
        $cities = Cities::where('state_code',$state_code)->get();
        $html = "";
        $html .= "<option value=''>Select City</option>";
        foreach($cities as $city) {
            $html .= "<option value='".$city->city_code."'>".$city->city_name."</option>";
        }
        return $html;
    }
}

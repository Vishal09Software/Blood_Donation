<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodRequest;
use App\Models\BloodDonors;
use App\Models\States;
use App\Models\Cities;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Testimonal;

class HomeController extends Controller
{
    public function index(){
        // Getting data
        $slider = Slider::where('status',1)->get();
        $gallery = Gallery::orderBy('id', 'DESC')->take(6)->get();
        $testimonal = Testimonal::orderBy('id', 'DESC')->take(3)->get();
        $state = States::all();
        $city = Cities::all();


        // Assigning to data
        $data = [
            'slider' => $slider,
            'gallery'=> $gallery,
            'testiomal'=> $testimonal,
            'all_states'=> $state,
            'all_cities'=> $city,
        ];

        // Returning to view
        return view('frontend.index',$data);
    }


    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'cname'=>'required',
            'number'=>'required ',
            'city'=>'required',
            'state'=>'required',
            'need_date'=>'required',
            'blood_group'=>'required',
            'gender'=>'required',
            'unit'=>'required',

        ]);
        // ,['unit.required' => 'Please select unit MESSAGE.']);
        $insert = new BloodRequest;
        $insert->name= $request['name'];
        $insert->cname= $request['cname'];
        $insert->number= $request['number'];
        $insert->state= $request['state'];
        $insert->city= $request['city'];
        $insert->need_date= $request['need_date'];
        $insert->blood_group= $request['blood_group'];
        $insert->gender= $request['gender'];
        $insert->unit= $request['unit'];
        $insert->status='Pending';
        $insert->save();
        return redirect()->back()->with('status','Request Successfully');
    }

    public function store2(Request $request){
        $request->validate([
            'name'=>'required',
            'blood_group'=>'required',
            'number'=>'required ',
            'state'=>'required',
            'city'=>'required',
            'ldb'=>'required',
            'unit'=>'required',
            'gender'=>'required',

        ]);
        $insert = new BloodDonors;
        $insert->name= $request['name'];
        $insert->blood_group= $request['blood_group'];
        $insert->number= $request['number'];
        $insert->state= $request['state'];
        $insert->city= $request['city'];
        $insert->ldb= $request['ldb'];
        $insert->gender= $request['gender'];
        $insert->unit= $request['unit'];
        $insert->status='Pending';
        if ($request->hasfile('image')){
            $file= $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('backend/images/',$filename);
            $insert->image = $filename;
        }
        $insert->save();
        return redirect()->back()->with('status','Request Successfully');
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

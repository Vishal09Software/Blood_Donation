<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\States;
use App\Models\Cities;


class SearchdonorController extends Controller
{
    public function index(){
        // Getting data
        $state = States::all();
        $city = Cities::all();

        // Assigning to data
        $data = [
            'all_states'=> $state,
            'all_cities'=> $city,
        ];
        // Returning to view
        return view('frontend.searchdonor',$data);
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

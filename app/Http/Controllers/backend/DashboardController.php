<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodDonors;
use App\Models\BloodRequest;
use App\Models\BloodBank;

class DashboardController extends Controller
{

    public function index(){
        // Getting data
        $donor = BloodDonors::count();
        $brequest = BloodRequest::count();
        $bloodbank = BloodBank::count();

        // Assigning to data
        $data = [
            'blooddonors' => $donor,
            'bloodrequest' => $brequest,
            'bloodbank' => $bloodbank,
        ];

        // Returning to view
        return view('backend.index',$data);
    }
}

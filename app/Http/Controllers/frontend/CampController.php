<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campes;


class CampController extends Controller
{
    public function index(){
        // Getting data
        $camp = Campes::orderBy('id', 'DESC')->paginate(10);

        // Assigning to data
        $data = [
            'campes'=> $camp
        ];

        // Returning to view
        return view('frontend.campes',$data);
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonal;


class AboutController extends Controller
{
    public function index(){
        // Getting data
        $testimonal = Testimonal::orderBy('id', 'DESC')->take(3)->get();

        // // Assigning to data
         $data = [
            'testiomal'=> $testimonal,
         ];

        // Returning to view
        return view('frontend.about', $data);
}
}

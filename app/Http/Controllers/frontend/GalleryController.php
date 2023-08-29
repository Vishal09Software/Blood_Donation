<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{
    //
    public function index(){
        // Getting data
        $gallery = Gallery::orderBy('id', 'DESC')->get();

        // Assigning to data
        $data = [
            'gallery'=> $gallery
        ];

        // Returning to view
        return view('frontend.gallery',$data);
    }
}

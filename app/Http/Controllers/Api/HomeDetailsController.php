<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\AcademicDetails;
use App\Model\PersonalDetails;
use App\Model\Testimonial;
use App\Model\WhatIDo;
use Illuminate\Http\Request;

class HomeDetailsController extends Controller
{
    public function personaldetails(){
        $personaldetails = PersonalDetails::all();
        return response()->json($personaldetails);
    }

    public function academicdetails(){
        $academicdetails = AcademicDetails::all();
        return response()->json($academicdetails);
    }

    public function whatido(){
        $whatido = WhatIDo::all();
        return response()->json($whatido);
    }

    public function testimonial(){
        $testimonial = Testimonial::all();
        return response()->json($testimonial);
    }
}

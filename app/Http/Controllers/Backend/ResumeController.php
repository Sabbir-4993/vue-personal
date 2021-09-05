<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function personaldetails(){
        return view('Backend.pages.personaldetails');
    }

    public function academic(){
        return view('Backend.pages.academicdetails');
    }

    public function job(){
        return view('Backend.pages.jobexperience');
    }

    public function whatido(){
        return view('Backend.pages.what_i_do');
    }

    public function whattheysay(){
        return view('Backend.pages.what_they_say');
    }

    public function facts(){
        return view('Backend.pages.interestingfacts');
    }
}

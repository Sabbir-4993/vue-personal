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
}

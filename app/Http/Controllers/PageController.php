<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('Frontend.pages.index');
    }

    public function resume(){
        return view('Frontend.pages.resume');
    }

    public function portfolio(){
        return view('Frontend.pages.portfolio');
    }

    public function portfoliodetails(){
        return view('Frontend.pages.portfolio_details');
    }

    public function blog(){
        return view('Frontend.pages.blog');
    }

    public function blogdetails(){
        return view('Frontend.pages.blog_details');
    }

    public function contact(){
        return view('Frontend.pages.contact');
    }
}

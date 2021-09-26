<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function cat_create(){
        return view('Backend.pages.category_add');
    }

    public function cat_store(Request $request){
        $request->validate([
            'cat_name' => 'required',
        ]);

        $details = new Category();
        $details->cat_name = $request->cat_name;

        $details->save();
        return redirect()->back()->with('message', 'Portfolio Category Added');

    }

}

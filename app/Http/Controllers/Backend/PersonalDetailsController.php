<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.pages.personaldetails');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email_pre' => 'required',
            'email_alt' => '',
            'phone_pre' => 'required',
            'phone_alt' => '',
            'birth' => 'required',
            'address' => 'required',
            'career_objective' => 'required',
        ]);

        $details = new \App\Model\PersonalDetails();
        $details->name = $request->name;
        $details->email_pre = $request->email_pre;
        $details->email_alt = $request->email_alt;
        $details->phone_pre = $request->phone_pre;
        $details->phone_alt = $request->phone_alt;
        $details->birth = $request->birth;
        $details->address = $request->address;
        $details->career_objective = $request->career_objective;

        $details->save();
        return redirect()->back()->with('message', 'Personal Details Submit Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

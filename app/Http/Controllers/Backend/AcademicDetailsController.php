<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.pages.academicdetails');
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
            'education_name' => 'required',
            'degree_title' => 'required',
            'institute_name' => 'required',
            'subject' => 'required',
            'passing' => 'required',
            'result' => 'required',
            'duration' => 'required',
        ]);

        $details = new \App\Model\AcademicDetails();
        $details->education_name = $request->education_name;
        $details->degree_title = $request->degree_title;
        $details->institute_name = $request->institute_name;
        $details->subject = $request->subject;
        $details->passing = $request->passing;
        $details->result = $request->result;
        $details->duration = $request->duration;

        $details->save();
        return redirect()->back()->with('message', 'Academic Details Submit Successfully');
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

@extends('Backend.master')

{{--Page Title--}}
@section('page_title')
{{ "Admin | Work Details " }}
@endsection

{{--menu show--}}
@section('show') show @endsection

{{--menu active--}}
@section('resume_active') active @endsection
@section('works_active') active @endsection

{{--main Content--}}
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Work</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Work Details</li>
        </ol>
    </div>
    <div id="message">
        @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('work-details.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Work Details Summary</h6>
                                </div>
                                <hr class="-divide">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Company Name</label>
                                            <input type="text" name="company_name" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputInstitute">Designation</label>
                                            <input type="text" name="designation" class="form-control" id="exampleInputInstitute" aria-describedby="examHelp" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputGroup">From - To</label>
                                            <input type="text" name="from_to" class="form-control" id="exampleInputGroup" aria-describedby="examHelp" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputResult">Details</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="-divide">
                        <button type="" class="btn btn-secondary float-left">Cancel</button>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--CSS--}}
@section('css')

@endsection

{{--JS--}}
@section('js')

@endsection

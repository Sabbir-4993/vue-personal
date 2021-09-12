@extends('Backend.master')

{{--Page Title--}}
@section('page_title')
    {{ "Admin | What I Do " }}
@endsection

{{--menu show--}}
@section('show') show @endsection

{{--menu active--}}
@section('resume_active') active @endsection
@section('facts_active') active @endsection

{{--main Content--}}
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Counter</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Interesting Facts</li>
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
                    <form action="{{route('interesting-facts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Counter Section</h6>
                                </div>
                                <hr class="-divide">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Topic Name</label>
                                            <input type="text" name="topic" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" placeholder="ex: UI Design">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputInstitute">Counter</label>
                                            <input type="text" name="counter" class="form-control" id="exampleInputInstitute" aria-describedby="examHelp" placeholder="ex: 5">
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

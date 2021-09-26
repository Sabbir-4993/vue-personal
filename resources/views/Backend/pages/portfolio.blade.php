@extends('Backend.master')

{{--Page Title--}}
@section('page_title')
    {{ "Admin | Portfolio Category Create" }}
@endsection

{{--menu show--}}
@section('portfolio') show @endsection

{{--menu active--}}
@section('portfolio_active') active @endsection
@section('portfolio_active') active @endsection

{{--main Content--}}
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Category Create</h6>
                                </div>
                                <hr class="-divide">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Portfolio Name</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Example select</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="Web Design">Web Design</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="UI/UX">UI / UX</option>
                                                <option value="Branding">Branding</option>
                                                <option value="Social Media">Social Media</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Client Name</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Date</label>
                                            <input type="date" name="" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Tools</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Website</label>
                                            <input type="text" name="" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Details</label>
                                            <textarea type="text" name="" class="form-control" required=""></textarea>
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

@extends('Backend.master')

{{--Page Title--}}
@section('page_title')
    {{ "Admin | Resume" }}
@endsection

{{--menu show--}}
@section('show') show @endsection

{{--menu active--}}
@section('resume_active') active @endsection
@section('personal_active') active @endsection

{{--main Content--}}
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Resume</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Resume</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
                                </div>
                                <hr class="-divide">
                                <div class="form-group">
                                    <label for="exampleInputName">Full Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Primary Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Alternate Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMobile1">Primary Mobile No</label>
                                    <input type="text" class="form-control" id="exampleInputMobile1" aria-describedby="phoneHelp"
                                           placeholder="+880" value="+880">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMobile2">Secondary Mobile No</label>
                                    <input type="text" class="form-control" id="exampleInputMobile2" aria-describedby="phoneHelp"
                                           placeholder="+880" value="+880">
                                </div>
                                <div class="form-group" id="simple-date1">
                                    <label for="simpleDataInput">Date of Birth</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAddress">Address</label>
                                    <textarea type="text" class="form-control" id="exampleInputAddress"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Career Objective</h6>
                                </div>
                                <hr class="-divide">
                                <div class="form-group">
                                    <label for="exampleInputCareer">Career Objective:</label>
                                    <textarea type="text" class="form-control" id="exampleInputCareer" rows="10"></textarea>
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
    <!-- Select2 -->
    <link href="{{asset('backend/vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap DatePicker -->
    <link href="{{asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" >
    <!-- Bootstrap Touchspin -->
    <link href="{{asset('backend/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" >
    <!-- ClockPicker -->
    <link href="{{asset('backend/vendor/clock-picker/clockpicker.css')}}" rel="stylesheet">
@endsection

{{--JS--}}
@section('js')
    <!-- Select2 -->
    <script src="{{asset('backend/vendor/select2/dist/js/select2.min.js')}}"></script>
    <!-- Bootstrap Datepicker -->
    <script src="{{asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap Touchspin -->
    <script src="{{asset('backend/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js')}}"></script>
    <!-- ClockPicker -->
    <script src="{{asset('backend/vendor/clock-picker/clockpicker.js')}}"></script>

    <script>
        $(document).ready(function () {


            $('.select2-single').select2();

            // Select2 Single  with Placeholder
            $('.select2-single-placeholder').select2({
                placeholder: "Select a Province",
                allowClear: true
            });

            // Select2 Multiple
            $('.select2-multiple').select2();

            // Bootstrap Date Picker
            $('#simple-date1 .input-group.date').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,
            });

            $('#simple-date2 .input-group.date').datepicker({
                startView: 1,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date3 .input-group.date').datepicker({
                startView: 2,
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            $('#simple-date4 .input-daterange').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
                todayBtn: 'linked',
            });

            // TouchSpin

            $('#touchSpin1').TouchSpin({
                min: 0,
                max: 100,
                boostat: 5,
                maxboostedstep: 10,
                initval: 0
            });

            $('#touchSpin2').TouchSpin({
                min:0,
                max: 100,
                decimals: 2,
                step: 0.1,
                postfix: '%',
                initval: 0,
                boostat: 5,
                maxboostedstep: 10
            });

            $('#touchSpin3').TouchSpin({
                min: 0,
                max: 100,
                initval: 0,
                boostat: 5,
                maxboostedstep: 10,
                verticalbuttons: true,
            });

            $('#clockPicker1').clockpicker({
                donetext: 'Done'
            });

            $('#clockPicker2').clockpicker({
                autoclose: true
            });

            let input = $('#clockPicker3').clockpicker({
                autoclose: true,
                'default': 'now',
                placement: 'top',
                align: 'left',
            });

            $('#check-minutes').click(function(e){
                e.stopPropagation();
                input.clockpicker('show').clockpicker('toggleView', 'minutes');
            });

        });
    </script>
@endsection

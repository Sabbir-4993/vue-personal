@extends('Backend.master')

{{--Page Title--}}
@section('page_title')
    {{ "Admin | What I Do " }}
@endsection

{{--menu show--}}
@section('show') show @endsection

{{--menu active--}}
@section('resume_active') active @endsection
@section('what_i_do_active') active @endsection

{{--main Content--}}
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">What I Do?</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">What i do</li>
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
                    <form action="{{route('What-I-do.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">What I Do Section</h6>
                                </div>
                                <hr class="-divide">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEducation1">Topic</label>
                                            <input type="text" name="topic" class="form-control" id="exampleInputEducation1" aria-describedby="nameHelp" placeholder="ex: UI Design">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputInstitute">Sub Topic</label>
                                            <input type="text" name="sub_topic" class="form-control" id="exampleInputInstitute" aria-describedby="examHelp" placeholder="ex: Mobile & Web">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputExamTitle">Icon <span class="small"><a href="http://docteur-abrar.com/wp-content/themes/thunder/admin/stroke-gap-icons/" target="_blank">(Icon List)</a></span></label>
                                            <input type="text" name="icon" class="form-control" id="exampleInputExamTitle" aria-describedby="examHelp" value="icon" placeholder="ex: icon icon-Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputResult">Content</label>
                                            <textarea type="text" name="details" class="form-control" id="exampleInputResult" aria-describedby="examHelp"></textarea>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th>Topic</th>
                            <th>Icon</th>
                            <th>Sub Topic</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Topic</th>
                            <th>Icon</th>
                            <th>Sub Topic</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

{{--CSS--}}
@section('css')
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

{{--JS--}}
@section('js')
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endsection

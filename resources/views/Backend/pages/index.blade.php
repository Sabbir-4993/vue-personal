@extends('Backend.master')

@section('page_title')
    {{ "Admin | Dashboard" }}
@endsection

@section('dashboard')
active
@endsection

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">

    </div>

@endsection


@section('css')

@endsection

@section('js')

@endsection

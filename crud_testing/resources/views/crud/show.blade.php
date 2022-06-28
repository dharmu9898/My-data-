@extends('layouts.app')

@section('content')


<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <a href="{{route('dashboard')}}">
                <li class="breadcrumb-item active fa fa-home" aria-current="page">Home</li>
            </a>
            <li class="breadcrumb-item active" aria-current="page"></li>
            <li class="breadcrumb-item active" aria-current="page">View Course</li>
        </ol>
    </nav>
    <div class="card w-90">
        <div class="card-body">
        <h5 class="card-title">First Name => {{$data->first_name }}</h5>
        <h5 class="card-title">Last Name => {{$data->last_name }}</h5>
        <h5 class="card-title">Email Id => {{$data->email }}</h5>
        <h5 class="card-title">Class => {{$data->class }}</h5>
        <h5 class="card-title">Roll Number => {{$data->roll }}</h5>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
    </div>
</div>
</div>
</div>
@endsection
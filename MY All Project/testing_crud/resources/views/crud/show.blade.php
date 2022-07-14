@extends('layouts.app')

@section('content')


<div class="container">
    <h3>Student Details</h3>
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
@endsection
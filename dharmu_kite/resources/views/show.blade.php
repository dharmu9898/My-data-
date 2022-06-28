@extends('layouts.app')

@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <a href="{{route('index')}}">
                    <li class="breadcrumb-item active fa fa-home" aria-current="page">Home</li>
                </a>
                <li class="breadcrumb-item active" aria-current="page"></li>
                <li class="breadcrumb-item active" aria-current="page">View Course</li>
            </ol>
        </nav>
    <div class="card w-90">
        <div class="card-body">
            <h5 class="card-title">{{ $data->course_name }}</h5>
            <p class="card-text">{{ $data->course_description }}</p>
            <a href="{{ route('index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
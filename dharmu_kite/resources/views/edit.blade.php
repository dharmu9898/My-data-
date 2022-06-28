@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="col-md-12 mx-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <a href="{{route('index')}}">
                            <li class="breadcrumb-item active fa fa-home" aria-current="page">Home</li>
                        </a>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
                    </ol>
                </nav>
                <form method="post" action="{{ route('update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h3><label class="col-md-4">Course Name</label></h3>
                        <div class="col-md-4">
                            <input type="text" name="course_name" value="{{ $data->course_name }}"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <h3><label class="col-md-4">Course Description</label></h3>
                        <div class="col-md-4">
                            <input type="text" name="course_description" value="{{ $data->course_description }}"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="form-group text-left ml-4">
                        <input type="submit" name="edit" class="btn btn-primary" value="Update" />
                        <a href="{{ route('index') }}" class="btn btn-primary ml-5">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
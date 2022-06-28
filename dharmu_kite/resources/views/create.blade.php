@extends('layouts.app')

@section('content')
{{-- messsage pop up open --}}
@if(session()->get('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session()->get('success') }}
</div>
@endif
<div class="col-12">
    @if(session()->get('danger'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('danger') }}
    </div>
    @endif
</div>
@if(count($errors) > 0)
<div class="row">
    <div class="col-12 error">
        <ul>
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p class="text-center"> {{$error}}</p>
            </div>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- messsage pop up close --}}

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
                            <li class="breadcrumb-item active" aria-current="page">Add Course</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card-body">

                <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h5 class="col-md-4 ">Course Name</h5>
                        <div class="col-md-8">
                            <input type="text" name="course_name" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <h5 class="col-md-4">Course Description</h5>
                        <div class="col-md-8">
                            <input type="text" name="course_description" class="form-control" required />
                        </div>
                    </div><br>
                    <div class="form-group ml-4">
                        <div class="col-md-4">
                            <div class="col-md-8">
                                <input type="submit" name="add course" class="btn btn-primary input-lg"
                                    value="Add Course" />
                                <a href="{{ route('index') }}" class="btn btn-primary ml-2">Back</a>
                            </div>
                        </div>
                </form>
            </div>

        </div>

    </div>
</div>
</div>

@endsection
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{ route('update', $data->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="form-group">
                    <h3><label class="col-md-12">Student Name</label></h3>
                    <div class="col-md-12">
                        <p>First Name <input type="text" name="first_name" value="{{ $data->first_name }}"
                                class="form-control" /></p>
                    </div>
                    <div class="col-md-12">
                    <p>Last Name <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control" />
                    </div>
                    <div class="col-md-12">
                    <p>Email Id <input type="text" name="email" value="{{ $data->email }}" class="form-control" />
                    </div>
                    <div class="col-md-12">
                    <p>Class   <input type="text" name="class" value="{{ $data->class }}" class="form-control" />
                    </div>
                    <div class="col-md-12">
                    <p>Roll Number  <input type="text" name="roll" value="{{ $data->roll }}" class="form-control" />
                    </div>
                </div>
                <div class="form-group text-left ml-4">
                    <input type="submit" name="edit" class="btn btn-primary" value="Update"/>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary ml-5">Back</a>
                </div>
                </div>
        </form>
    </div>
</div>
@endsection
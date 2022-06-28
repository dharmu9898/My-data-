@extends('layouts.master')

@section('title')
Admin Dashboard
@endsection

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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-md-12 mx-auto">

                    <div class="card-body">

                        <form method="post" action="{{ route('admin.store_department') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h3> Fill The Your Department</h3>
                                <div class="col-md-8">
                                    <input type="text" name="college_department" class="form-control" placeholder="Enter Your Department"
                                        required/>
                                </div>
                            <div class="form-group ml-4">
                                <div class="col-md-8">
                                    <input type="submit" name="add data" class="btn btn-primary input-lg"
                                        value="Add data" />
                                    <a href="{{ route('admin.add_department') }}" class="btn btn-primary ml-5">Back</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection
            @section('script')
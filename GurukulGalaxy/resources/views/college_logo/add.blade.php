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

                        <form method="post" action="{{ route('admin.save') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-4 text-right">University Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="university_name" class="form-control input-lg" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 text-right">Select Profile Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" />
                                </div>
                            </div>
                            <div class="form-group ml-4">
                                <div class="col-md-8">
                                    <input type="submit" name="add data" class="btn btn-primary input-lg"
                                        value="Add data" />
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection
            @section('script')
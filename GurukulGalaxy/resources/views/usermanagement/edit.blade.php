@extends('layouts.master')

@section('title')
Admin Dashboard
@endsection



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

<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mx-auto">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5 class="col-md-4">Name</h5>
                            <div class="col-md-8">
                                <input type="text" name="names" value="{{ $data->names }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="col-md-4">Email</h5>
                            <div class="col-md-8">
                                <input type="text" name="email" value="{{ $data->email }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="col-md-4">Roll</h5>
                            <div class="col-md-8">
                                <select class="form-control" id="roll" name="roll" value="{{ $data->role_name }}">
                                    <option>{{ $data->name }}</option>
                                    @foreach($rolls as $cat)
                                    <option>{{ $cat }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="col-md-4">Password</h5>
                            <div class="col-md-8">
                                <input type="text" name="password" value="{{ $data->password }}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group ml-4">
                            <input type="submit" name="add data" class="btn btn-primary input-lg" value="Update"/>
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary ml-5">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @endsection

        @section('script')
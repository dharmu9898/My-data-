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
                    <form method="post" action="{{ route('admin.update_department', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h5 class="col-md-4">Your Department</h5>
                            <div class="col-md-8">
                                <input type="text" name="college_department" value="{{ $data->college_department }}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group ml-4">
                            <input type="submit" name="add data" class="btn btn-primary input-lg" value="Update" />
                            <a href="{{ route('admin.add_department') }}" class="btn btn-primary ml-5">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
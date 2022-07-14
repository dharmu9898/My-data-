@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling="center">Add Data</h3>
        <br />

        <div class="card-body">

            <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <h5 class="col-md-4 ">Firts Name</h5>
                    <div class="col-md-8">
                        <input type="text" name="first_name" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <h5 class="col-md-4">Last Name</h5>
                    <div class="col-md-8">
                        <input type="text" name="last_name" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <h5 class="col-md-4">Email</h5>
                    <div class="col-md-8">
                        <input type="text" name="email" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <h5 class="col-md-4">Class</h5>
                    <div class="col-md-8">
                        <input type="text" name="class" class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <h5 class="col-md-4">Roll</h5>
                    <div class="col-md-8">
                        <input type="text" name="roll" class="form-control" required />
                    </div>
                </div>
                <div class="form-group ml-4">
                    <input type="submit" name="add data" class="btn btn-primary input-lg" value="Add data" />
                    <a href="{{ route('dashboard') }}" class="btn btn-primary ml-2">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
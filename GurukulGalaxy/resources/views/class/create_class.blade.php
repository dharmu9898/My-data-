@extends('layouts.master')

@section('title')
Admin Dashboard
@endsection

@section('content')


    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-md-12 mx-auto">

                    <div class="card-body">

                        <form method="post" action="{{ route('admin.store_class') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                        <div class="form-group">
                        <h3 class="col-md-4 ">Fill The Class</h3>
                                <div class="col-md-12">
                                <input type="text" name="class" class="form-control"
                                    placeholder="Enter Your Class" required />
                            </div>
                        </div>
                    </div>
                        <div class="form-group ml-4">
                            <div class="col-md-8">
                                <input type="submit" name="Add Class" class="btn btn-primary input-lg"
                                    value="Add Class"/>
                                <a href="{{ route('admin.add_syllabus') }}" class="btn btn-primary ml-5">Back</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
@section('script')
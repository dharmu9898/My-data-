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
                    <form method="post" action="{{ route('admin.store_subject') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                            <div class="col-md-8">
                                <select class="form-control" id="class" name="class" value=" role_name">
                                    @foreach($data as $cat)
                                    <option>{{ $cat->class}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <h3 class="col-md-4 ">Fill The Subject</h3>
                                <div class="col-md-12">
                                    <input type="text" name="subject" class="form-control"
                                        placeholder="Enter Your Subject" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-4">
                            <div class="col-md-8">
                                <input type="submit" name="Add Subject" class="btn btn-primary input-lg"
                                    value="Add Subject" />
                                <a href="{{ route('admin.add_syllabus') }}" class="btn btn-primary ml-5">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
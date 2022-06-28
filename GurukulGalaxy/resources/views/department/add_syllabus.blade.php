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
    {{-- messsage pop up close --}}

    <div class="container">
    <div>
        <a href="{{route('admin.create_department')}}" class="btn btn-success btn-sm">Class</a>
        <a href="#" class="btn btn-success btn-sm">Subject</a>
        <a href="#" class="btn btn-success btn-sm">Syllabus</a>
</div>
    <table class="table table-bordered table-striped ">
        <tr>
            <th width="40%">College Department</th>
            <th width="50%">Action</th>
        </tr>
    </table>
</div>
 @endsection
@section('script')
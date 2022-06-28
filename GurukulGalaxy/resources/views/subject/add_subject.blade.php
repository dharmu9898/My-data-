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
            <a href="{{route('admin.create_syllabus')}}" class="btn btn-success btn-sm">Add Syllabus</a>
            <a href="{{route('admin.create_class')}}" class="btn btn-success btn-sm">Class</a>
            <a href="{{route('admin.create_subject')}}" class="btn btn-success btn-sm">Subject</a>

        </div>
        <table class="table table-bordered table-striped ">
            <tr>
                <th width="40%">Class</th>
                <th width="40%">Subject</th>
                <th width="50%">Action</th>
            </tr>
            @foreach($data as $row)
        <tr>
            <td>{{ $row->class}}</td>
            <td>{{ $row->subject}}</td>
            <td>
                <span style="margin-left:150px;"><a href="#"
                        class="btn btn-warning">Edit</a></span>
                <span class="float-right" style="margin-right:200px;"><a>
                        <form action="#" method="destroy">
                            {{ method_field('DELETE') }}
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this item?');"
                                class="btn btn-danger">Delete</button>
                            @csrf
                        </form>
                    </a>
                </span>
            </td>
        </tr>
        @endforeach
    </table>{{$data->links()}}
    </div>
    @endsection
    @section('script')
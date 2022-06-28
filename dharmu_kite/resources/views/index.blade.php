@extends('layouts.app')

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
            <a href="{{route('create')}}" class="btn btn-success ">Add Course</a>
        </div>
        <br>
        <table class="table table-bordered table-striped" id="myTable">
            <tr>
                <th width="35%">Course Name</th>
                <th width="35%">Course Description</th>
                <th width="30%">Action</th>
            </tr>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->course_name }}</td>
                <td>{{ $row->course_description }}</td>
                <td>
                    <span class="float-left" style="margin-left: 40px;"><a href="{{ route('show', $row->id) }}"
                            class="btn btn-success">Show</a></span>
                    <span style="margin-left: 20px;"><a href="{{ route('edit', $row->id) }}"
                            class="btn btn-warning">Edit</a></span>
                    <span class="float-right" style="margin-right: 50px;"><a>
                            <form action="{{route('destroy', $row->id) }}" method="destroy">
                                {{ method_field('DELETE') }}
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                    class="btn btn-danger">Delete</button>
                                @csrf
                            </form>
                        </a></span>
                </td>
            </tr>
            @endforeach
        </table> {{$data->links()}}
    </div>

    @endsection
@extends('layouts.master')

@section('title')
Admin Dashboard
@endsection

@section('content')
<!-- {{-- messsage pop up open --}}
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
    @endif -->
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mx-auto">
                <form method="post" action="{{ route('admin.update_notice', $data->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <h3>Fill The College Notice</h3>
                            <textarea class="form-control" id="summary-ckeditor"
                                name="notice">{{ $data->notice }}</textarea>
                            <br>
                            <h3>Examination Details</h3>
                            <textarea class="form-control" id="summary1-ckeditor"
                                name="examination_details">{{ $data->examination_details}}</textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <h5 class="col-md-4 ">Fill The Link Title</h5>
                                <div class="col-md-8">
                                <input type="text" name="links_title" value="{{ $data->links_title }}"
                                    class="form-control" placeholder="Enter Your links_title" required />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <h3> Fill The College Link</h3>
                            <div class="col-md-12">
                                <input type="text" name="important_links" value="{{$data->important_links}}"
                                    class="form-control" placeholder="Enter Your Name" required />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="input-group">
                                <h3>Annual Academic Calendar PDF upload</h3>
                                <div class="col-md-12">
                                    <input type="file" name="filename[]" value="{{$data->filename}}" class="form-control col-md-7" required>
                                </div>
                            </div>
                        </div>
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                    CKEDITOR.replace('summary-ckeditor');
                    CKEDITOR.replace('summary1-ckeditor');
                    </script>
                    <!-- <div class="card-body">
                        <div class="form-group">
                            <h3> Fill The College Notice</h3>
                            <textarea name="notice"  id="summary-ckeditor"
                                class="form-control">{{ $data->notice }}</textarea>
                            <br>

                            <h3> Important links about collage and university</h3>
                            <textarea name="college_link"class="form-control"
                                id="summary1-ckeditor">{{ $data->examination_details}}</textarea>
                            <br>
                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                            <script>
                            CKEDITOR.replace('summary-ckeditor');
                            CKEDITOR.replace('summary1-ckeditor');
                            </script> -->
                    <div class="form-group ml-4">
                        <input type="submit" name="add data" class="btn btn-primary input-lg" value="Update" />
                        <a href="{{ route('admin.add_notice') }}" class="btn btn-primary ml-5">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
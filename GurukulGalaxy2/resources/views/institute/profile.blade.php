@extends('layouts.app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
@section('content')

<!-- @if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Sorry !</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif -->

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
    <!-- {{-- messsage pop up close --}}
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif -->
    <div class="container margin-right:30px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="text-align: center;">Institute Profile</h2>

                    </div>
                    <br>
                    <form method="post" action="{{route('institutes.store', auth::user()->id )}}"
                        enctype="multipart/form-data">
                        {{csrf_field()}}


                        <div class="form-group row">
                            <label class="col-md-4 text-md-right col-form-label">Full Address</label>
                            <div class="col-md-7">
                                <input type="text" name="full_address" class="form-control input-lg" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 text-md-right col-form-label">Phone Number</label>
                            <div class="col-md-7">
                                <input type="number" name="phone_number" class="form-control input-lg" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 text-md-right col-form-label">Description</label>
                            <div class="col-md-7">
                                <input type="text" name="description" class="form-control input-lg" required />
                            </div>
                        </div>

                        <br>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-primary input" />
                            <a href="{{route('institutes.dashboard')}}" class="btn btn-success">Back</a>
                        </div>
                        <div class="text-right">

                        </div>
                    </form>

                    <script type="text/javascript">
                    $(document).ready(function() {
                        $(".btn-success").click(function() {
                            var html = $(".clone").html();
                            $(".increment").after(html);
                        });
                        $("body").on("click", ".btn-danger", function() {
                            $(this).parents(".control-group").remove();
                        });
                    });
                    </script>
                </div>
            </div>
        </div>
        @endsection
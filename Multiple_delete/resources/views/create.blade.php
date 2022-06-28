@extends('sorces')

@section('main')
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
        <div class="row">
            <div class="card-body">

                <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h5 class="col-md-4 ">Product Name</h5>
                        <div class="col-md-8">
                            <input type="text" name="product_name" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <h5 class="col-md-4">Product Detailes</h5>
                        <div class="col-md-8">
                            <input type="text" name="product_detailes" class="form-control" required />
                        </div>
                    </div><br>
                    <div class="form-group ml-4">
                        <div class="col-md-4">
                            <div class="col-md-8">
                                <input type="submit" name="add product" class="btn btn-primary input-lg"
                                    value="Add product" />              
                            </div>
                        </div>
                </form>
            </div>

        </div>

    </div>
</div>
</div>

@endsection
@extends('layouts.master')

@section('title')
Admin Notice
@endsection
@section('content')
<style>
.important_link {
    width: 10px !important;
    "

}

.td2 {
    width: 300px;
}

.td1 {
    width: 90px;
}

.read-more-show {
    cursor: pointer;
    color: #ed8323;
}

.read-more-hide {
    cursor: pointer;
    color: #ed8323;
}

.hide_content {
    display: none;
}
</style>

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
            <div class="col-sm-12">
                <br>
                <div>
                    <a href="{{route('admin.create_notice')}}" class="btn btn-success ">Add Notice</a>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th style="width:20px;">Notice</th>
                        <th style="width:10px;">Examination_Events</th>
                        <th style="width:10px;">Links_Title</th>
                        <th style="width:20px;">Important_Links</th>
                        <th style="width:05px;">Annual Academic</th>
                        <th style="width:05px;">Action</th>
                    </tr>
                    @foreach($data as $row)
                    <tr>
                        <td class="td2">

                            @if( strlen( $row->notice ) > 100 )
                            {!! substr( $row->notice,0,100 ) !!}
                            <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                            <span class="read-more-content"> {{ substr( $row->notice,100,strlen( $row->notice )) }}
                                <span class="read-more-hide hide_content">Less<i class="fa fa-angle-up"></i></span>
                            </span>
                            @else
                            {!! $row->notice !!}
                        </td>
                        <td>
                        @endif
                        @if( strlen( $row->notice ) == 100 )
                            {{ substr( $row->notice,0,100 ) }}
                            <span class="read-more-hide hide_content">Less<i class="fa fa-angle-down"></i></span>
                            <span class="read-more-content"> {{ substr( $row->notice,100,strlen( $row->notice )) }}
                                <span class="read-more-show hide_content">More<i class="fa fa-angle-up"></i></span>
                            </span>
                            </span>
                        </td>
                        @endif
                        <td>
                            @if(strlen($row->examination_details) > 40)
                            {{substr($row->examination_details,0,40)}}
                            <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                            <span class="read-more-content">
                                {{substr($row->examination_details,40,strlen($row->examination_details))}}
                                <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span>
                            </span>
                            @else
                            {!! $row->examination_details !!}
                        </td>
                        @endif
                        <td>
                            <p class="td1">{{$row->links_title}}</p>
                        </td>
                        <td><a target="_blank" href="{{$row->important_links}}">Click Here</a></td>
                        <td>{{$row->filename}}</td>
                        <td>

                            <a href="{{ route('admin.edit_notice', $row->id) }}"
                                class="btn btn-warning">Edit</a><br><br><br> </a>
                            <form action="{{ route('admin.destroy_notice', $row->id) }}" method="destroy">
                                {{ method_field('DELETE') }}
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                    class="btn btn-danger">Delete</button>
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>{{$data->links()}}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
    // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
    $('.read-more-content').addClass('hide_content')
    $('.read-more-show, .read-more-hide').removeClass('hide_content')

    // Set up the toggle effect:
    $('.read-more-show').on('click', function(e) {
        $(this).next('.read-more-content').removeClass('hide_content');
        $(this).addClass('hide_content');
        e.preventDefault();
    });

    // Changes contributed by @diego-rzg
    $('.read-more-hide').on('click', function(e) {
        var p = $(this).parent('.read-more-content');
        p.addClass('hide_content');
        p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
        e.preventDefault();
    });
    $('#ckeditor-id').hide();
    </script>
    @endsection
    @section('script')
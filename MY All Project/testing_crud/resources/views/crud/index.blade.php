 @extends('layouts.app')
 @section('content')
 <div class="container"></div>
 <div class="row">
     <!-- Search Start -->
     <div class="col-md-12">
         <div class="input-group input-group-alternative input-group-merge mb-4">
             <div class="input-group-prepend">
                 <span class="input-group-text"><i class="fas fa-search"></i></span>
             </div>
             <input class="form-control" name="manual_filter_tablesm" id="manual_filter_tablesm"
                 placeholder="Search by name, country, state, city, concern" type="text">
         </div>
     </div>
     <!-- Serach End  -->
     <br />
     <!-- Filter By Class  -->
     <div class="col-md-6">
         <h3>Select Your Class</h3>
         <select class="form-control-2" name="manual_filter_table" id="manual_filter_table">
             <option value="">Select Your Class</option>
             @foreach(App\Crud::all() as $cat)
             <option value="{{$cat->class}}">{{$cat->class}}</option>
             @endforeach
         </select>
     </div>
     <!-- End Filter By Class  -->
     <!-- Filter By Email  -->
     <div class="col-md-6">
         <h3>Select Your Email</h3>
         <select class="form-control-2" name="manual_filter_table1" id="manual_filter_table1">
             <option value="">Select Your Email</option>
             @foreach(App\Crud::all() as $cat)
             <option value="{{$cat->email}}">{{$cat->email}}</option>
             @endforeach
         </select>
     </div>
 </div>
 <!-- End Filter By Email  -->
 </br>
 <h3 align="center">Student Details</h3>
 <br />
 @if($message = Session::get('success'))
 <div class="alert alert-success">
     <p>{{$message}}</p>
 </div>
 @endif
 <div align="right">
     <a href="{{route('create')}}" class="btn btn-primary">Add</a>
     <br />
     <br />
 </div>
 <table class="table table-bordered table-striped" id="mytable">
     <thead>
         <tr>
             <th width="15%">First Name</th>
             <th width="15%">Last Name</th>
             <th width="15%">Email</th>
             <th width="10%">Class</th>
             <th width="10%">Roll</th>
             <th width="30%">Action</th>
         </tr>
     </thead>
     <tbody>
         @include("crud.paginated_data")
     </tbody>
 </table>
 <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
 </div>
 </div>
 @endsection

 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
function fetch_data(page, manual_filter, manual_filter_tablesm) {
    $('#mytable tbody').html('');
    $.ajax({
        url: "{{ url('crud/index/welcome_manualfilter')}}?page=" + page + "&manual_filter_table=" +
            manual_filter + "&manual_filter_tablesm=" + manual_filter_tablesm,
        success: function(data) {
            console.log(data);
            $('#mytable tbody').html('');
            $('#mytable tbody').html(data);
        }
    });
}
$(document).ready(function() {
    $("#manual_filter_table").change(function() {
        $('#manual_filter_tablesm').val('');
        var manual_filter_tablesm = $('#manual_filter_tablesm').val();

        manual_filter = $("#manual_filter_table").val();
        var page = $('#hidden_page').val();

        $('#manual_filter_table1 option').prop('selected', function() {
            return this.defaultSelected;
        });
        fetch_data(page, manual_filter, manual_filter_tablesm);
    })
});

$(document).ready(function() {
    $("#manual_filter_table1").change(function() {
        $('#manual_filter_tablesm').val('');
        var manual_filter_tablesm = $('#manual_filter_tablesm').val();

        manual_filter = $("#manual_filter_table1").val();
        var page = $('#hidden_page').val();

        $('#manual_filter_table option').prop('selected', function() {
            return this.defaultSelected;
        });
        fetch_data(page, manual_filter, manual_filter_tablesm);
    })
});
$(document).on('keyup', '#manual_filter_tablesm', function() {
    var manual_filter_tablesm = $('#manual_filter_tablesm').val();
    manual_filter = $("#manual_filter_table").val();
    var page = $('#hidden_page').val();

    $('#manual_filter_table option').prop('selected', function() {
        return this.defaultSelected;
    });
    $('#manual_filter_table1 option').prop('selected', function() {
        return this.defaultSelected;
    });
    fetch_data(page, manual_filter, manual_filter_tablesm);
});

$(document).on('click', '.pagination a', function(event) {
    event.preventDefault();
    var manual_filter_tablesm = $('#manual_filter_tablesm').val();
    var page = $(this).attr('href').split('page=')[1];
    manual_filter = $("#manual_filter_table").val();
    manual_filter = $("#manual_filter_table1").val();
    fetch_data(page, manual_filter, manual_filter_tablesm);
});
</script>
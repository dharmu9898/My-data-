<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="bheekho Foundation">
  <meta name="author" content="Sushant Kumar">
  <title>Bheekho Foundation</title>
  <!-- Favicon -->
 
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="icon" href="{{asset('img/brand/bheekho-foundation.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('theme/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/argon.css?v=1.1.0')}}" type="text/css">
</head>

<body>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Bheekho Foundation</h6>
              
            </div>
            <div class="flex-center position-ref full-height col-lg-6 col-5 text-right">
            @if (Route::has('login'))
                <div class="top-right links ">
                  <span class="contact-mail text-white mr-3"><i class="fa fa-envelope mr-2"></i>contact@bheekhofoundation.com</span>
                  <span class="text-white mr-3"><i class="fa fa-phone mr-2" ></i> +91 8987425586</span>
                    @auth
                    <a href="{{ route('socialmember.dashboard') }}" class="btn btn-sm btn-neutral">Dashboard</a>
                    @else
                        <a href="{{route('login')}}" class="btn btn-sm btn-neutral mr-2">Login</a>                      
                    @endauth
                </div>
            @endif
             </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row mt--5">
        <div class="col-md-11 ml-auto mr-auto">
          <div class="card card-upgrade">
            <div class="card-header text-center border-bottom-0">
              <h1 class="card-title">Request Lists For Need Help</h1>
              <div class="form-group"> 
                <div class="row">
                <div class="col-md-3">  
                  <select class="form-control-2" name="manual_filter_table3" id="manual_filter_table3">
                      <option value="">Select Your Consern</option>
                       @foreach(App\AdminCategory::all() as $cat)
                        <option value="{{$cat->category}}" >{{$cat->category}}</option>
                        @endforeach                                 
                  </select>
            </div>
            <div class="col-md-3">  
                  <select class="form-control-2 countries" name="manual_filter_table" id="manual_filter_table">
                      <option value="">Select Your Country</option>
                  </select>
            </div>

              <div class="col-md-3">  
                <select class="form-control-2 states" name="manual_filter_table1" id="manual_filter_table1">
                      <option value="">Select Your State</option>
                                                       
                  </select>
              </div>

              <div class="col-md-3">  
                <select class="form-control-2 cities" name="manual_filter_table2" id="manual_filter_table2">
                            <option value="">Select Your City</option>                        
                  </select>
              </div>
               </div>
          </div>


                <div class="form-group"> 
                <div class="row">
    <!-- Search Start --> 
    <div class="col-md-12">    
     <div class="input-group input-group-alternative input-group-merge mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" name="manual_filter_tablesm" id="manual_filter_tablesm" placeholder="Search by name, country, state, city, concern" type="text">
                </div>
              </div>
              <!-- Serach End -->
              </div>
          </div>
           
              
            </div>
           
              
             <table id="mytable">
              <tbody>
            @include('welcome_paginated_data')
              </tbody>
              </table>
            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />            
         
            
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class=" footer  " style="margin-bottom: 10px ;" id="footer-main">
    <div class="container">
      <div class="row justify-content-xl-between">
        <div class="col-xl-12">
          <div class="copyright text-center text-muted">
            &copy; 2020 <a href="https://www.bheekho.com/" class="font-weight-bold ml-1 " target="_blank">Bheekho Foundation</a>
          </div>
        </div>       
      </div>
    </div>
  </footer>
    </div>
  </div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>  
    function fetch_data(page, manual_filter, manual_filter_tablesm)
            {
              $('#mytable tbody').html('');
                $('#mytable tbody').html('<td colspan="6" align="center"><img src="{{asset('images/loading.gif')}}" alt="Loading..." /></td>');
              $.ajax({
                  url:"{{ url('welcome/welcome_manualfilter')}}?page="+page+"&manual_filter_table="+manual_filter+"&manual_filter_tablesm="+manual_filter_tablesm,
                  success:function(data){
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
                 $('#manual_filter_table2 option').prop('selected', function() {
                    return this.defaultSelected;
                });
                 $('#manual_filter_table3 option').prop('selected', function() {
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
                 $('#manual_filter_table2 option').prop('selected', function() {
                    return this.defaultSelected;
                });
                 $('#manual_filter_table3 option').prop('selected', function() {
                    return this.defaultSelected;
                });
                fetch_data(page, manual_filter, manual_filter_tablesm);
              })
            });

        $(document).ready(function() {   
              $("#manual_filter_table2").change(function() {
                $('#manual_filter_tablesm').val('');
                var manual_filter_tablesm = $('#manual_filter_tablesm').val();
                manual_filter = $("#manual_filter_table2").val();
                 var page = $('#hidden_page').val();
                 $('#manual_filter_table option').prop('selected', function() {
                    return this.defaultSelected;
                });
                 $('#manual_filter_table1 option').prop('selected', function() {
                    return this.defaultSelected;
                });
                 $('#manual_filter_table3 option').prop('selected', function() {
                    return this.defaultSelected;
                });
                fetch_data(page, manual_filter, manual_filter_tablesm);
              })
            });

        $(document).ready(function() {   
              $("#manual_filter_table3").change(function() {
                $('#manual_filter_tablesm').val('');
                var manual_filter_tablesm = $('#manual_filter_tablesm').val();
                manual_filter = $("#manual_filter_table3").val();
                 var page = $('#hidden_page').val();
                 $('#manual_filter_table option').prop('selected', function() {
                    return this.defaultSelected;
                });
                 $('#manual_filter_table1 option').prop('selected', function() {
                    return this.defaultSelected;
                });
                 $('#manual_filter_table2 option').prop('selected', function() {
                    return this.defaultSelected;
                });
                fetch_data(page, manual_filter, manual_filter_tablesm);
              })
            });

        $(document).on('keyup', '#manual_filter_tablesm', function(){
            var manual_filter_tablesm = $('#manual_filter_tablesm').val();
            manual_filter = $("#manual_filter_table").val();
            var page = $('#hidden_page').val();
            $('#manual_filter_table option').prop('selected', function() {
                    return this.defaultSelected;
                });
            $('#manual_filter_table1 option').prop('selected', function() {
                    return this.defaultSelected;
                });
            $('#manual_filter_table2 option').prop('selected', function() {
                    return this.defaultSelected;
                });
            $('#manual_filter_table3 option').prop('selected', function() {
                    return this.defaultSelected;
                });
            fetch_data(page, manual_filter, manual_filter_tablesm);
           });        


          $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
             var manual_filter_tablesm = $('#manual_filter_tablesm').val();
            var page = $(this).attr('href').split('page=')[1];
            manual_filter = $("#manual_filter_table").val();
            manual_filter = $("#manual_filter_table1").val();
            manual_filter = $("#manual_filter_table2").val();
            manual_filter = $("#manual_filter_table3").val();
            fetch_data(page, manual_filter, manual_filter_tablesm);
          });
    </script>


  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('theme/jquery/dist/jquery.min.js')}}" differ ></script>
  <script src="{{asset('theme/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('theme/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('theme/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('theme/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Argon JS
  <script src="{{asset('js/argon.js?v=1.1.0')}}"></script>
  
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{asset('js/location.js')}}"></script> -->
</body>

</html>
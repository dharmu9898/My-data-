@if(sizeof($allrequests) > 0)
@foreach($allrequests as $row)
<style type="text/css">
  .p1{
    font-size: 15px;
  }
</style>
    <tr>
      <td>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card"> 
                
                  <div>
                    
                    <a class="btn btn-primary" style="width: 10%; margin: 1%; color: white;">{{$row->concern}}</a>
                   
                  </div>
                  

                   <div class="card-header" >
                     <h2 style="font-weight: bold;">{{$row->name}}</h2>
                     <div class="row text-muted mt-3" >
                      <div class="col-lg-3 p1">  
                          {{$row->country_name}}
                      </div>
                       <div class="col-lg-3 p1"> {{$row->state_name}}  </div>
                        <div class="col-lg-3 p1">{{$row->city_name}} </div>
                    </div>
                   <div class="mt-3">{{$row->message}}</div> 
                    <a href="{{action('SocialRevolutionaries\SocialRevolutionaryController@show', $row->request_id)}}" class="btn btn-primary float-right" style="width: 15%; margin: 1%;">Want to Help !</a>
                  </div>
              </div>
            </div>
        </div>
    </div>
    </td>
    </tr>
             
          
            @endforeach
            @else
           <tr>
             <td colspan="8">
                  <p style="text-align:center; font-weight: bold;">No Data found</p>
            </td>
            </tr>
            @endif
            <tr>
       <td colspan="6" align="center">
        {!! $allrequests->links('vendor.pagination.bootstrap-4') !!} 
       </td>
      </tr>




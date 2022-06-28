@if(sizeof($data) >0)
@foreach($data as $row)

<tr>
    <td>{{$row->first_name}}</td>
    <td>{{$row->last_name}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->class}}</td>
    <td>{{$row->roll}}</td>
    <td style="text-align:center;" > 
      <a href="{{ route('show', $row->id) }}" class="btn btn-primary">Show</a>
      <a href="{{ route('edit', $row->id) }}" class="btn btn-warning">Edit </a>
      <a href="{{route('destroy', $row->id) }}" class="btn btn-danger">Delete </a>
      {{ method_field('DELETE') }}
    </td>
   </tr>
   @endforeach
@else
<tr>
    <th style="font-size: 22px; color:red;">Data not found</th>
</tr>
@endif
{!! $data->links() !!}


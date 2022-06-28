<h6>This Conditional Page part one</h6>

<!-- {{strlen($name)}}

@if(strlen($name) < 5)

String has leght >0

@elseif(strlen($name) > 5 && strlen($name) < 10)

string has lenght within 5 to 10

@elseif(strlen($name) > 10)
 
 string has leght > 10

@else
    String has leght = 0 

@endif -->

<!-- @isset($name)

@empty($name)
  Value is empty
@endempty
 
 {{$name}}

@endisset -->

@unless($names)

array has no value 

@endunless


@foreach($names as $name)

{{$name}}

@endforeach


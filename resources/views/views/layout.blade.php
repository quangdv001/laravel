@extends('views.master')
@section('title','layout')

@section('content')
day la trang layout
@for($i = 0; $i<=10; $i++ )
so thu tu {{$i}} <br/>
@endfor
<hr/>
<?php $i=0 ?>
@while($i<=10)
so thu tu {{$i}} <br/>
<?php $i++; ?>
@endwhile
<?php
 $data = ['com','pho','chao'];
 ?>
 <hr/>
@foreach($data as $val)
{{$val}},
@endforeach
@endsection
{{--@stop--}}
@section('sidebar')
clgt
@parent

@endsection
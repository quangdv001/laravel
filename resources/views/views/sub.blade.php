@extends('views.master')
@section('title','sub')

@section('content')
day la trang gi
<?php $ten = "<b>quang</b>"; ?>
<?php echo $ten; ?>
<br/>
{{$ten}}
<br/>
{!! $ten !!}
<?php $diem = 6; ?>
@if($diem<5)
hoc sinh tb
@elseif ($diem >=5 && $diem <7)
hoc sinh kha
@else
hoc sinh gioi
@endif
{{isset($diem)?$diem:"khong co bien diem"}}
<hr/>
{{ $diem or "khong ton tai bien diem" }}
@endsection
{{--@stop--}}
@section('sidebar')
clgt
@parent

@endsection
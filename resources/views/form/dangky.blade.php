@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $val)
        <li>{{$val}}</li>
        @endforeach
    </ul>
@endif

{!! Form::open(array('route'=>'xulythem', 'files'=>true)) !!}
{!! Form::label('hoten','ho ten') !!}
{!! Form::text('hoten') !!}{!! $errors->first('hoten') !!}<br/>
 {!! Form::file('image') !!}<br/>
{!! Form::submit('gui') !!}
{!! Form::close() !!}
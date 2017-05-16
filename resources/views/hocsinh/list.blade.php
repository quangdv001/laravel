<table border="1">
<tr>
<th>id</th>
<th>ten</th>
<th>toan</th>
<th>ly</th>
<th>hoa</th>
<th>sua</th>
<th>xoa</th>
</tr>
@foreach($data as $hs)
<tr>
    <td>{{ $hs->id }}</td>
    <td>{{ $hs->ten }}</td>
    <td>{{ $hs->toan }}</td>
    <td>{{ $hs->ly }}</td>
    <td>{{ $hs->hoa }}</td>
    <td><a href="{{ route('hocsinh.edit',$hs->id) }}">edit</a></td>
    <td>
        {!! Form::open(['route'=>['hocsinh.destroy',$hs->id],'method'=>'DELETE']) !!}
            <input type="submit" value="delete" onclick="confirm('co chac muon xoa')"/>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach

</table>

<a href="{{  route('hocsinh.create') }}">tao moi</a>
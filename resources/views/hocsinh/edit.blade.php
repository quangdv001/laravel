{!! Form::open(array( 'route'=>['hocsinh.update',$data->id],'method'=>'PUT' )) !!}
<label for="ten">ten</label>
<input type="text" name="ten" value="{{ $data->ten }}"/><br/>
<label for="ten">toan</label>
<input type="text" name="toan" value="{{ $data->toan }}"/><br/>
<label for="ten">ly</label>
<input type="text" name="ly" value="{{ $data->ly }}"/><br/>
<label for="ten">hoa</label>
<input type="text" name="hoa" value="{{ $data->hoa }}"/><br/>
<input type="submit" value="sua"/>
{!! Form::close() !!}


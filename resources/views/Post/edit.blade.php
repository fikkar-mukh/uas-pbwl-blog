@extends('layouts.app')
@section('content')

	<div class="container">
	<h2>Edit Data Post</h2>
	<form action="{{ url('/post/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf
	@method('PATCH')
	<table>		
			<tr>
				<th>KATEGORI ID</th>
				<td><select name="post_cat_id">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}"
						@if($row->cat_id ==$rows->post_cat_id)
						selected
						@endif
						>{{$row->cat_name}}</option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<th>TANGGAL</th>
				<td><input type="date" name="post_date" value="{{ $rows->post_date}}"></td>
			</tr>
			<tr>
				<th>SLUG</th>
				<td><input type="text" name="post_slug" value="{{ $rows->post_slug}}"></td>
			</tr>
			<tr>
				<th>JUDUL</th>
				<td><input type="text" name="post_tittle" value="{{ $rows->post_tittle}}></td>
			</tr>
			<tr>
				<th>KETERANGAN</th>
				<td><input type="text" name="post_text"></td>
			</tr>

	</table>
	<div class="form-group row">
		<div class="col-sm-10">
		<input type="submit" value="UPDATE" class="btn btn-info">
	</div></div>
	</form>
</div>
</body>
</html>

@endsection
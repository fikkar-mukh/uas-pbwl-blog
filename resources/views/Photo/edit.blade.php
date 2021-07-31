@extends('layouts.app')
@section('content')

<div class="container">
	
	<h2>Edit Data Photo</h2>
	<form action="{{ url('/photo/' . $rows->id)}}" method="post" enctype="multipart/form-data">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
	<tr>
				<th>POST ID</th>
				<td><select name="photo_post_id">
					@foreach($post as $row)
					<option value="{{$row->id}}">{{$row->post_tittle}}</option>
					@endforeach</select></td>
			</tr>
			<tr>
						<th>TANGGAL</th>
						<td><input type="date" name="pho_date"></td>
					</tr>
					<tr>
						<th>JUDUL</th>
						<td><input type="text" name="pho_tittle"></td>
					</tr>
					<tr>
						<th>KETERANGAN</th>
						<td><input type="text" name="pho_text"></td>
					</tr>
					<tr>
					<tr>
						<th></th>
						<td><input id="btn" type="submit" value="UPDATE"></td>
					</tr>
		
	</table>
	
	</form>
</div>
@endsection
@extends('layouts.app')
@section('content')

	<div class="container">
	
	<h2>Input Data Photo</h2>
	<form method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
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
						<td><input id="btn" type="submit" value="SIMPAN"></td>
					</tr>

		</table>
		
	</form>


@endsection
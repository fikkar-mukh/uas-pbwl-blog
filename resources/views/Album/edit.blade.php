@extends('layouts.app')
@section('content')

	<div class="container">
	
	<h2>Edit Data Album </h2>
	<form action="{{ url('/album/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
			<tr>
				<th>PHOTO ID</th>
				<td><select name="photo_post_id">
				@foreach($post as $row)
					<option value="{{$row->id}}">
					@if($row->id==$rows->album_pho_id)
					selected
					@endlf
					>{{$row->photo_tittle}}</option>
					@endforeach</select>
				</td>
			</tr>
			<tr>
			<th>NAMA</th>
			<td><input type="text" name="cat_name" value="{{ $row->cat_name}}"></td>
		</tr>
		<tr>
			<th>KETERANGAN</th>
			<td><input type="text" name="cat_text" value="{{ $row->cat_text}}"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr>

	</table>
	
	</form>
</div>
@endsection
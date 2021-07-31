@extends('layouts.app')
@section('content')

	<div class="container">
	<h2>Input Data Album</h2>
	<form method="post" action="{{url('/album')}}">
	@csrf
		<table>
		<tr>
				<th>PHOTO ID</th>
				<td><select name="photo_post_id">
					@foreach($post as $row)
					<option value="{{$row->id}}">{{$row->photo_tittle}}</option>
					@endforeach</select></td>
			</tr>
			<tr>
						<th>NAMA</th>
						<td><input type="text" name="album_name"></td>
					</tr>
					<tr>
						<th>KETERANGAN</th>
						<td><input type="text" name="pho_text"></td>
					</tr>
					<tr>
						<th></th>
						<td><input id="btn" type="submit" value="SIMPAN"></td>
					</tr>
		</table>
		
	</form>
</div>
@endsection
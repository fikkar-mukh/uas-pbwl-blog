@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Input Data Post</h2>
	<form method="post" action="{{url('/post')}}">
	@csrf
		<table>
			<tr>
				<th>KATEGORI ID</th>
				<td><select name="post_cat_id">
				@foreach($cat as $row)
				<option value="{{$row->id}}">{{$row->cat_name}}</option> @endforeach</select></td>
			</tr>
			<tr>
				<th>TANGGAL</th>
				<td><input type="date" name="post_date"></td>
			</tr>
			<tr>
				<th>SLUG</th>
				<td><input type="text" name="post_slug"></td>
			</tr>
			<tr>
				<th>JUDUL</th>
				<td><input type="text" name="post_tittle"></td>
			</tr>
			<tr>
				<th>KETERANGAN</th>
				<td><input type="text" name="post_text"></td>
			</tr>
			
			<tr><th></th>
			<td><input id="btn" type="submit" value="SIMPAN"</td>			
			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="post_slug" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>
			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" name="post_tittle" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" name="post_text" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

		</table>
			<div class="form-group row">
				<button type="submit" class="btn btn-info">SAVE</button>
	</form>
</div>
</html>
@endsection
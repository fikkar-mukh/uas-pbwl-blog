@extends('layouts.app')
@section('content')

	<div class="container">

	<h2>Edit Data Kategori</h2>
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table>
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
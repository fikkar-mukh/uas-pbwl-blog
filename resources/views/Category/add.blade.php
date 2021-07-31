@extends('layouts.app')
@section('content')

	<div class="container">
	
	<h2>Input Data Kategori</h2>
			<form method="post" action="{{url('/category')}}">
			@csrf
				<table>					
					<tr>
						<th>NAMA</th>
						<td><input type="text" name="cat_name"></td>
					</tr>
					<tr>
						<th>KETERANGAN</th>
						<td><input type="text" name="cat_name"></td>
					</tr>
					<tr>
						<th></th>
						<td><input id="btn" type="submit" value="SIMPAN"></td>
					</tr>
				</table>
</form>
</div>
@endsection
@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Data Photo <a href="{{ url('photo/create') }}" class="btn btn-info">Add</a></h2>

	<table>
		
		<tr>
			<th>ID</th>
			<th>POST ID</th>
			<th>TANGGAL</th>
			<th>JUDUL</th>
			<th>KETERANGAN</th>
			<th>EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td><img width="150px" class="img-thumbnail" src="{{ url('public/uploads/images/'. $row->gambar) }}"></td>
			<td>{{ $row->post->post_tittle }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td>
				<a href="{{ url('photo/' . $row->id . '/edit')}}">EDIT</a>
				
				<form action="{{ url('photo/' . $row->id)}}" method="post">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button id="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection
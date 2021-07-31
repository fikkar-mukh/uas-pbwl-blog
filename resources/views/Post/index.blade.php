@extends('layouts.app')
@section('content')

	<div class="container">
	<h2>Data Post <a href="{{ url('post/create') }}" class="btn btn-info">Add</a></h2>

	<table>
		<tr>
			<th>ID</th>
			<th>KATEGORI ID</th>
			<th>TANGGAL</th>
			<th>SLUG</th>
			<th>JUDUL</th>
			<th>KETERANGAN</th>
			<th>EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->category->cat_name }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td>
				<a id="btn" href="{{ url('post/' . $row->id . '/edit')}}">EDIT</a>
				<form action="{{ url('post/' . $row->id)}}" method="post">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button id="btn"> DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection
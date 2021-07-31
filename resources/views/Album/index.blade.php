@extends('layouts.app')
@section('content')

<div class="container">
	<h2>Data Album <a href="{{ url('album/create') }}" >Add</a></h2>

	<table>
		
		<tr>
			<th>ID</th>
			<th>PHOTO ID</th>
			<th>NAMA</th>
			<th>KETERANGAN</th>
			<th>ACTION</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->photo->pho_tittle }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
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
@extends('layout.app')

@section('title')
All Data Pembeli
@endsection


@section('content')
<center>
	<table>
		<thread>
			<tr>
				<th>Nama Pembeli</th>
				<th>Alamat</th>
				<th colspan="2">Action</th>
			</tr>
		</thread>
		<tbody>
			@foreach($pembeli as $key)
				<tr>
					<td>{{$key->nama}}</td>
					<td>{{$key->alamat}}</td>
					<td><a href="{{url('pembeli/edit/'.$key->id)}}">Edit</a></td>
					<td><a onclick="return confirm('Yakin Hapus Data {{$key->nama}}?')"
					 href="{{url('pembeli/delete/'.$key->id)}}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{url('pembeli/add')}}">Tambah Data</a>
</center>
@endsection
@extends('layout.app')

@section('title')
All Data
@endsection


@section('content')
<center>


	<table>
		<thread>
			<tr>
				<th>Nama Barang</th>
				<th>Jenis</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th colspan="2">Action</th>
			</tr>
		</thread>
		<tbody>
			@foreach($barang as $key)
				<tr>
					<td>{{$key->nama}}</td>
					<td>{{$key->jenis}}</td>
					<td>{{$key->jumlah}}</td>
					<td>{{$key->harga}}</td>
					<td><a href="{{url('barang/edit/'.$key->id)}}">Edit</a></td>
					<td><a onclick="return confirm('Yakin Hapus Data {{$key->nama}}?')"
					 href="{{url('barang/delete/'.$key->id)}}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{url('barang/add')}}">Tambah Data</a>
</center>
@endsection
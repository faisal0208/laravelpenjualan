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
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Total</th>
			</tr>
		</thread>
		<tbody>
			@foreach($transaksi as $key)
				<tr>
					<td>{{$key->pembeli->nama}}</td>
					<td>{{$key->barang->nama}}</td>
					<td>{{$key->jumlah}}</td>
					<td>{{$key->total}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{url('transaksi/add')}}">Tambah Data Transaksi</a>
</center>
@endsection
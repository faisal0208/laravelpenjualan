@extends('layout.app')

@section('title')
Add Data
@endsection

@section('content')

<form method="POST" action="{{url('transaksi/save')}}">
	<table>
		<tr>
			<td>Nama Pembeli</td>
			<td><select name="id_pembeli" required>
				<option value="">--Pilih Jenis--</option>
				@foreach($pembeli as $key)
				<option value="{{$key->id}}">{{$key->nama}}</option>
				@endforeach
				</select></td>
		</tr>
				<tr>
			<td>Nama Barang</td>
			<td><select name="id_barang" required>
				<option value="">--Pilih Jenis--</option>
				@foreach($barang as $key)
				<option value="{{$key->id}}">{{$key->nama}}</option>
				@endforeach
				</select></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td><input type="number" name="jumlah" required></td>
		</tr>	
		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Simpan</button></td>
			<input type="hidden" name="_token"
				value="{{csrf_token()}}">
	</table>
</form>

@endsection
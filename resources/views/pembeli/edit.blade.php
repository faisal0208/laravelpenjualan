@extends('layout.app')

@section('title')
Add Data Pembeli
@endsection

@section('content')

<form method="POST" action="{{url('pembeli/update')}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" required value="{{$pembeli->nama}}">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea  type="text" name="alamat" required>{{$pembeli->alamat}}</textarea></td>
		</tr>	
		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Ubah</button></td>
			<input type="hidden" name="_token"
				value="{{csrf_token()}}">
						<input type="hidden" name="id"
					value="{{$pembeli->id}}">
	</table>
</form>

@endsection
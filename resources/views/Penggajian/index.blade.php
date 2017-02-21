@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-0 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Data Penggajian </h1></div>
                <div class="panel-body">

	
	<a href="{{ url('/Penggajian/create') }}" class="btn btn-success"> Tambah Data Penggajian</a>
	<hr>

	<table class="table table-striped table-bordered table-hover">
		<thead>
		<tr class="bg-info">
			<th> No </th>
			<th>kode Tunjangan Pegawai</th>
			<th> Nama Pegawai </th>
			<th> Jabatan </th>
			<th> Golongan </th>
			<th> Jumlah Jam Lembur</th>
			<th> Jumlah Uang Lembur</th>
			<th> Gaji Pokok</th>
			<th> Total Gaji</th>
			<th> Tanggal Pengambilan</th>
			<th> Status Pengambilan </th>
			<th> Petugas Penggambilan</th>
	
			<th colspan="2"><center> Action </center></th>
		</tr>
		</thead>
		
		<tbody>
	@foreach ($Penggajian as $data)
	<tr>
	<td>{{ $data->id }}</td>
				<td> {{ $data->Tunjangan_pegawai->Besaran_uang}}</td>
				<td></td>
			<td></td>
			<td></td>
		<td></td>
		<td></td>
		<td> {{ $data->Tunjangan_pegawai->Tunjangan->Jabatan->Besaran_uang }} </td>
				<td> {{ $data->Total_gaji}}</td>
				<td> {{ $data->Tanggal_pengambilan}}</td>
				<td> {{ $data->Status_pengambilan}}</td>
				<td> {{ $data->Petugas_penerima}}</td>
				<td><center><a href="{{route('Penggajian.edit', $data->id)}}" class="btn btn-warning">Update</a></center></td>  
	<td>  

	<center>{!! Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}</center>
	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
		</tbody>

	</table>
</div>
</div>
</div>
</div>
</div>
</div>
@stop
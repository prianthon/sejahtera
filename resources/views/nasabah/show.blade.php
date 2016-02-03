@extends('template')

@section('title')
  <title>Detail Nasabah</title>
@endsection

@section('content')
  <table class="table table-bordered">
    <tr><td width="120">No Rekening</td><td>{{ $nasabah->no_rekening }}</td><td rowspan="3"></td></tr>
    <tr><td>Nama Lengkap</td><td>{{ $nasabah->nama_lengkap }}</td></tr>
    <tr><td>Alamat</td><td>{{ $nasabah->alamat }}</td></tr>
  </table>
@endsection

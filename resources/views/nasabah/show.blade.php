@extends('template')

@section('title')
  <title>Detail Nasabah</title>
@endsection

@section('menunavbar')
  <li><a href="{{ url('dashboard') }}">Beranda</a></li>
  <li class="active"><a href="{{ url('nasabah') }}">Nasabah</a></li>
  <li><a href="#about">Transaksi</a></li>
  <li><a href="#about">Laporan</a></li>
@endsection

@section('content')
  <table class="table table-bordered">
    <tr><td width="120">No Rekening</td><td>{{ $nasabah->no_rekening }}</td><td rowspan="3"><img src="{{ asset('foto/'.$nasabah->foto) }}" width="100"></td></tr>
    <tr><td>Nama Lengkap</td><td>{{ $nasabah->nama_lengkap }}</td></tr>
    <tr><td>Alamat</td><td>{{ $nasabah->alamat }}</td></tr>
  </table>
@endsection

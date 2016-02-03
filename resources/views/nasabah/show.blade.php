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
<div class="col-sm-6">
  <table class="table table-bordered">
    <tr><td width="120">No Rekening</td><td>{{ $nasabah->no_rekening }}</td><td rowspan="3"><img src="{{ asset('foto/'.$nasabah->foto) }}" width="100"></td></tr>
    <tr><td>Total Transaksi</td><td>{{ $nasabah->nama_lengkap }}</td></tr>
    <tr><td>Alamat</td><td>{{ $nasabah->alamat }}</td></tr>
  </table>
</div>
<div class="col-sm-6">
  <table class="table table-bordered">
    <tr><td colspan="2">Transaksi</td></tr>
    <tr><td>Total Transaksi</td><td>{!! Form::text('total',null,['class'=>'form-control']) !!}</td></tr>
    <tr><td>Jenis Transaksi</td><td>{!! Form::select('jenis_transaksi',array('kredit'=>'KREDIT','debit'=>'DEBIT'),null,['class'=>'form-control']) !!}</td></tr>
    <tr><td colspan="2">{!! Form::submit('SIMPAN',['class'=>'btn btn-danger btn-sm']) !!}</td></tr>
  </table>
</div>
@endsection

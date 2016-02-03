@extends('template')

@section('title')
  <title>Tambah Data</title>
@endsection

@section('menunavbar')
  <li><a href="{{ url('dashboard') }}">Beranda</a></li>
  <li class="active"><a href="{{ url('nasabah') }}">Nasabah</a></li>
  <li><a href="#about">Transaksi</a></li>
  <li><a href="#about">Laporan</a></li>
@endsection

@section('content')
  {!! Form::open(array('url'=>'nasabah','files'=>'true')) !!}
  <div class="form-group">
    <div class="controls">
        @include('nasabah.form')
    </div>
  </div>
  {!! Form::close() !!}
@endsection

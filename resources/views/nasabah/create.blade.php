@extends('template')

@section('title')
  <title>Tambah Data</title>
@endsection

@section('menunavbar')
  <li><a href="{{ url('dashboard') }}">Beranda</a></li>
  <li class="active"><a href="{{ url('nasabah') }}">Nasabah</a></li>
  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          Laporan <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('laporan/pdf') }}"><i class="fa fa-btn fa-sign-out"></i>Export PDF</a></li>
          <li><a href="{{ url('laporan/excel') }}"><i class="fa fa-btn fa-sign-out"></i>Export Excel</a></li>
      </ul>
  </li>
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

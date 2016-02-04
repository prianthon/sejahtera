@extends('template')

@section('title')
  <title>Dashboard</title>
@endsection

@section('menunavbar')
  <li class="active"><a href="{{ url('dashboard') }}">Beranda</a></li>
  <li><a href="{{ url('nasabah') }}">Nasabah</a></li>
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
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Selamat, anda sudah masuk!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

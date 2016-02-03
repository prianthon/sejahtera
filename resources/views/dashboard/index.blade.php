@extends('template')

@section('title')
  <title>Dashboard</title>
@endsection

@section('menunavbar')
  <li class="active"><a href="{{ url('dashboard') }}">Beranda</a></li>
  <li><a href="{{ url('nasabah') }}">Nasabah</a></li>
  <li><a href="#about">Transaksi</a></li>
  <li><a href="#about">Laporan</a></li>
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

@extends('template')

@section('title')
  <title>Detail Nasabah</title>
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
<div class="col-sm-6">
  <table class="table table-bordered">
    <tr><td width="120">No Rekening</td><td>{{ $nasabah->no_rekening }}</td><td rowspan="3"><img src="{{ asset('foto/'.$nasabah->foto) }}" width="100"></td></tr>
    <tr><td>Total Transaksi</td><td>{{ $nasabah->nama_lengkap }}</td></tr>
    <tr><td>Alamat</td><td>{{ $nasabah->alamat }}</td></tr>
    <tr><td>Saldo</td><td colspan="2">{{ $nasabah->saldo_terakhir }}</td></tr>
  </table>
</div>
<div class="col-sm-6">
  {!! Form::open(array('url'=>'nasabah/transaksi')) !!}
  {!! Form::hidden('nasabah_id',$nasabah->id)  !!}
  <table class="table table-bordered">
    <tr><td colspan="2">Transaksi</td></tr>
    <tr><td>Total Transaksi</td><td>{!! Form::text('total',null,['class'=>'form-control']) !!}</td></tr>
    <tr><td>Jenis Transaksi</td><td>{!! Form::select('jenis_transaksi',array('kredit'=>'KREDIT','debit'=>'DEBIT'),null,['class'=>'form-control']) !!}</td></tr>
    <tr><td colspan="2">{!! Form::submit('SIMPAN',['class'=>'btn btn-danger btn-sm']) !!}</td></tr>
  </table>
  {!! Form::close() !!}
  <?php
    if(Session::has('message'))
    {
      echo "<p>".Session::get('message')."</p>";
    }
  ?>
</div>
<div class="col-sm-12">
  <table class="table table-bordered">
    <tr><th>Tanggal</th><th>Jenis Transaksi</th><th>Jumlah</th><th>Operator</th></tr>
    @foreach($transaksi as $t)
    <tr><td>{{ tgl_id($t->created_at) }}</td><td>{{ $t->jenis_transaksi }}</td><td>{{ $t->total }}</td><td>{{ $t->name }}</td></tr>
    @endforeach
  </table>
</div>
@endsection

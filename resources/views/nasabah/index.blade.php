@extends('template')

@section('title')
  <title>Nasabah</title>
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
      {!! link_to('nasabah/create','Tambah Data',["class"=>"btn btn-primary btn-md"]) !!}<br><br>
      {!! Form::open(array('url'=>'nasabah/cari')) !!}
      {!! Form::text('keyword',null,['class'=>'form-control','placeholder'=>'Cari No Rekening, ketik lalu tekan enter']) !!}
      {!! Form::close() !!}<hr>
  <table class="table table-striped">
    <tr>
      <th>No Rekening</th><th>Nama Lengkap</th><th>Alamat</th><th>Aksi</th>
    </tr>
    @foreach ($nasabah as $n)
    <tr>
      <td>{{ $n->no_rekening }}</td>
      <td>{{ $n->nama_lengkap }}</td>
      <td>{{ $n->alamat }}</td>
      <td width="200">
        {!! Form::open(array('method'=>'delete','url'=>'nasabah/'.$n->id)) !!}
        {!! Form::hidden('_delete','DELETE') !!}
        {!! link_to('nasabah/'.$n->id,'Detail',['class'=>'btn btn-info btn-sm']) !!}
        {!! link_to('nasabah/'.$n->id.'/edit','Ubah',['class'=>'btn btn-warning btn-sm']) !!}
        {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </table>
  {!! $nasabah->render() !!}
@endsection

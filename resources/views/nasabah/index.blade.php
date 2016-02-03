@extends('template')

@section('title')
  <title>Nasabah</title>
@endsection

@section('content')
  {!! link_to('nasabah/create','Tambah Data',["class"=>"btn btn-primary btn-sm"]) !!}
  <hr>
    {!! Form::open(array('url'=>'nasabah/cari')) !!}
    {!! Form::text('keyword',null,['class'=>'form-control','placeholder'=>'Cari No Rekeing, ketik lalu tekan enter']) !!}
    {!! Form::close() !!}
  <hr>
  <table class="table table-striped">
    <tr>
      <th>No Rekening</th><th>Nama Lengkap</th><th>Alamat</th><th>Aksi</th>
    </tr>
    @foreach ($nasabah as $n)
    <tr>
      <td>{{ $n->no_rekening }}</td>
      <td>{{ $n->nama_lengkap }}</td>
      <td>{{ $n->alamat }}</td>
      <td width="150">
        {!! Form::open(array('method'=>'delete','url'=>'nasabah/'.$n->id)) !!}
        {!! Form::hidden('_delete','DELETE') !!}
        {!! link_to('nasabah/'.$n->id.'/edit','Ubah',['class'=>'btn btn-warning btn-sm']) !!}
        {!! Form::submit('Hapus',['class'=>'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </table>
  {!! $nasabah->render() !!}
@endsection

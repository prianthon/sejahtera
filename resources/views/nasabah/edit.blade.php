@extends('template')

@section('title')
  <title>Edit Data</title>
@endsection

@section('content')
  {!! Form::model($nasabah, array('url'=>'nasabah/'.$nasabah->id,'method'=>'patch')) !!}
  <table class="table table-bordered">
    <tr><td>No Rekening</td><td>{!! Form::text('no_rekening',null,['class'=>'form-control','autofocus']) !!}</td></tr>
    <tr><td>Nama Lengkap</td><td>{!! Form::text('nama_lengkap',null,['class'=>'form-control']) !!}</td></tr>
    <tr><td>Alamat</td><td>{!! Form::textarea('alamat',null,['class'=>'form-control']) !!}</td></tr>
    <tr>
      <td colspan="2">
        {!! Form::submit('SIMPAN',['class'=>'btn btn-danger btn-sm']) !!}
        {!! link_to('nasabah','KEMBALI',['class'=>'btn btn-warning btn-sm']) !!}
  </table>
  {!! Form::close() !!}
@endsection

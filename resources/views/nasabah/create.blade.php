@extends('template')

@section('title')
  <title>Tambah Data</title>
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

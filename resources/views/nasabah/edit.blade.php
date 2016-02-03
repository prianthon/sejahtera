@extends('template')

@section('title')
  <title>Edit Data</title>
@endsection

@section('content')
  {!! Form::model($nasabah, array('url'=>'nasabah/'.$nasabah->id,'method'=>'patch')) !!}
  <div class="form-group">
    <div class="controls">
        @include('nasabah.form')
    </div>
  </div>
  {!! Form::close() !!}
@endsection

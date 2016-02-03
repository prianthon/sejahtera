@extends('template')

@section('title')
  <title>Nasabah</title>
@endsection

@section('content')

  {!! link_to('nasabah/create','Tambah Data',["class"=>"btn btn-danger btn-sm"]) !!}
  <br><br>
  <table class="table table-striped">
    <tr>
      <th>No Rekening</th><th>Nama Lengkap</th><th>Alamat</th><th>Aksi</th>
    </tr>
    @foreach ($nasabah as $n)
    <tr>
      <td>{{ $n->no_rekening }}</td>
      <td>{{ $n->nama_lengkap }}</td>
      <td>{{ $n->alamat }}</td>
      <td></td>
    </tr>
    @endforeach
  </table>
@endsection

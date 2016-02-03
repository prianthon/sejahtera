@extends('template')
@section('content')

  {!! link_to('create','Tambah Data',["class"=>"btn btn-danger btn-sm"]) !!}

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

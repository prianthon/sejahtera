@extends('template')

@section('title')
  <title>Selamat datang</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat datang</div>

                <div class="panel-body">
                    Aplikasi BMT EL Sejahtera makin siap.<br><br>
                    <p><img src="{{ asset('img/logo-bmt-el-sejahtera.png')}}"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

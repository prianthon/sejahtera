<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nasabah;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\NasabahRequest;

class NasabahController extends Controller
{
    public function index()
    {
      $nasabah = Nasabah::paginate(5);
      return view('nasabah.index', compact('nasabah'));
    }

    public function cari(Request $request)
    {
      $keyword = $request['keyword'];
      $nasabah = Nasabah::where('no_rekening','=',$keyword)->paginate(5) ;
      return view('nasabah.index', compact('nasabah'));
    }

    public function create()
    {
      return view('nasabah.create');
    }

    public function store(NasabahRequest $request)
    {
      $filename = Input::file('foto')->getClientOriginalName();
      Input::file('foto')->move(public_path().'/foto/',$filename);
      $data=$request->all();
      $data=array(
        'nama_lengkap'=>Input::get('nama_lengkap'),
        'no_rekening'=>Input::get('no_rekening'),
        'alamat'=>Input::get('alamat'),
        'foto'=>$filename);
      Nasabah::create($data);
      alert()->overlay('Sipp..', 'Tambah Data Nasabah Berhasil!', 'success');
      return redirect('nasabah');
    }

    public function show($id)
    {
      $nasabah = Nasabah::find($id);
      return view('nasabah.show', compact('nasabah'));
    }

    public function edit($id)
    {
      $nasabah = Nasabah::find($id);
      return view('nasabah.edit', compact('nasabah'));
    }

    public function update(NasabahRequest $request, $id)
    {
      $data=$request->all();
      $nasabah = Nasabah::find($id);
      $nasabah->update($data);
      alert()->overlay('Selamat', 'Ubah Data Nasabah Berhasil!', 'success');
      return redirect('nasabah');
    }

    public function destroy($id)
    {
      $nasabah = Nasabah::find($id);
      $nasabah->delete();
      alert()->overlay('Selamat', 'Hapus Data Nasabah Berhasil!', 'success');
      return redirect('nasabah');
    }
}

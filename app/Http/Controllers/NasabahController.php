<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nasabah;
use App\Http\Requests\NasabahRequest;

class NasabahController extends Controller
{
    public function index()
    {
      $nasabah = Nasabah::paginate(5);
      return view('nasabah.index', compact('nasabah'));
    }

    public function create()
    {
      return view('nasabah.create');
    }

    public function store(NasabahRequest $request)
    {
      $data=$request->all();
      Nasabah::create($data);
      alert()->overlay('Sipp..', 'Tambah Data Nasabah Berhasil!', 'success');
      return redirect('nasabah');
    }
}

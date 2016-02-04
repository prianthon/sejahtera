<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nasabah;
use App\Transaksi;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\NasabahRequest;

class NasabahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
      $transaksi = \DB::table('transaksis')
                  ->join('users','users.id','=','transaksis.user_id')
                  ->get();
      $data['transaksi'] = $transaksi;
      $nasabah = Nasabah::find($id);
      return view('nasabah.show', compact('nasabah','transaksi'));
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

    public function transaksi(Request $request)
    {
      //Transaksi::create($request->all());
      //$transaksi = New transaksi($request->all());
      //Auth::user()->transaksi()->save($transaksi);
      $data = $request->all();
      Transaksi::create($data);
      return redirect('nasabah/'.$request->nasabah_id);
    }
}

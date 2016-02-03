<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nasabah;

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
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'nasabahs';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['nama_lengkap','no_rekening','alamat','foto'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  # Tentukan nama tabel terkait
  protected $table = 'transaksis';

  # MASS ASSIGNMENT
  # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
  protected $fillable = ['nasabah_id','total','jenis_transaksi','saldo'];

  public function nasabah()
  {
    return $this->belongsTo('App\Nasabah','nasabah_id');
  }

  public function user()
  {
    return $this->belongsTo('App\User','user_id');
  }
}

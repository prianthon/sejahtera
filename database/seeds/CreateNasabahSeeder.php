<?php

use Illuminate\Database\Seeder;

class CreateNasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
    DB::table('nasabahs')->delete();

    // buat data berupa array untuk diinput ke database
    $nasabahs = array(
      //KABUPATEN ACEH SELATAN
      array('id'=>1, 'nama_lengkap'=>'Agung ancoer', 'no_rekening'=>'12345678', 'alamat'=>'Kawunganten'),
      array('id'=>2, 'nama_lengkap'=>'Exitor rendi', 'no_rekening'=>'23456789', 'alamat'=>'Kesugihan'),
      array('id'=>3, 'nama_lengkap'=>'Toplek tofik', 'no_rekening'=>'34567890', 'alamat'=>'Sumampir'),
      array('id'=>4, 'nama_lengkap'=>'Oyi yeaaahhh', 'no_rekening'=>'45678901', 'alamat'=>'dimanaya'),
    );

    // masukkan data ke database
    DB::table('nasabahs')->insert($nasabahs);
    }
}

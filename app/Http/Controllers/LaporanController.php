<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use fpdf;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function pdf()
    {
      $pdf = new \fpdf\FPDF();
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',12);
      $pdf->Cell(10,8,'No.',1,0);
      $pdf->Cell(25,8,'Tanggal',1,0);
      $pdf->Cell(40,8,'No. Rekening',1,0);
      $pdf->Cell(45,8,'Nama',1,0);
      $pdf->Cell(20,8,'Jumlah',1,0);
      $pdf->Cell(50,8,'Operator',1,1);
      $transaksi = \DB::table('transaksis')
                  ->join('users','users.id','=','transaksis.user_id')
                  ->join('nasabahs','nasabahs.id','=','transaksis.nasabah_id')
                  ->get();
      $no=1;
      $pdf->SetFont('Arial','',12);
      foreach($transaksi as $t)
      {
        $pdf->Cell(10,8,$no,1,0);
        $pdf->Cell(25,8,tgl_id($t->created_at),1,0);
        $pdf->Cell(40,8,$t->no_rekening,1,0);
        $pdf->Cell(45,8,$t->nama_lengkap,1,0);
        $pdf->Cell(20,8,$t->total,1,0);
        $pdf->Cell(50,8,$t->name,1,1);
        $no++;
      }
      $pdf->Output();
    }

    public function excel()
    {

    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;


use App\Models\Formulir;
use Illuminate\Http\Request;
use PDF;

class CetakController extends Controller
{
    public function index($id)
    {
        $data = Formulir::where('nik', $id)->first();
        $pdf = PDF::loadview('pdf.tes', ['data' => $data])->setPaper('A4', 'potrait');
        $namafile = "Kartu Bukti Pendaftaran.pdf";
        // return view('pdf.tes',compact('data'));
        return $pdf->stream($namafile);
    }
    public function cetakformulir($id)
    {
        $data = Formulir::where('nik', $id)->first();
        $pdf = PDF::loadview('pdf.formulir', ['data' => $data])->setPaper('A4', 'potrait');
        $namafile = "Kartu Tes.pdf";
        // return view('pdf.tes',compact('data'));
        return $pdf->stream($namafile);
    }

    public function viewformulir()
    {
        return view('pendaftaran.formulir');
    }
    public function formulir(Request $request)
    {
        // $data= [
        //     'status'=>'tes',
        // ];
        // return response()->json($data);
        $nik = $request->nik;
        $cek = Formulir::where('nik', $nik)->count();
        if ($cek > 0) {
            $data = Formulir::where('nik', $nik)->first();
            $pdf = PDF::loadview('pdf.formulir', ['data' => $data])->setPaper('A4', 'potrait');
            $namafile = "Kartu Bukti Pendaftaran.pdf";
            // return view('pdf.formulir',compact('data'));

            return $pdf->stream($namafile);
        } else {
            return redirect()->back()->with('error', 'NIK yang anda masukkan tidak terdaftar!');  
        }
        // return $pdf->stream($namafile);
    }

    public function viewtes()
    {
        return view('pendaftaran.tes');
    }

    public function tes(Request $request)
    {
        $nik = $request->nik;
        $cek = Formulir::where('nik', $nik)->count();
        if ($cek > 0) {

            $cek2 = Formulir::where([['nik', $nik], ['status', 2]])->count();
            if ($cek2 > 0) {
                $data = Formulir::where('nik', $nik)->first();
                $pdf = PDF::loadview('pdf.tes', ['data' => $data])->setPaper('A4', 'potrait');
                $namafile = "Kartu Tes.pdf";
                // return view('pdf.tes',compact('data'));
                return $pdf->stream($namafile);
            } else {
            return redirect()->back()->with('error', 'Anda belum melakukan pembayaran biaya pendaftaran');  

            }
        } else {
            return redirect()->back()->with('error', 'NIK yang anda masukkan tidak terdaftar!');  

        }
        // return $pdf->stream($namafile);
    }
    public function exportpendaftar()
    {
        $data = Formulir::orderBy('status',"DESC")->get();
        $date = date('d F Y');
        $pdf = PDF::loadview('pdf.export', ['data' => $data])->setPaper('A4', 'landscape');
        $namafile = "data pendaftar-".$date.".pdf";
        // return view('pdf.tes',compact('data'));
        return $pdf->stream($namafile);
    }

    public function exportbelum()
    {
        $data = Formulir::where('status',1)->orderBy('no_formulir')->get();
        $date = date('d F Y');
        $pdf = PDF::loadview('pdf.export', ['data' => $data])->setPaper('A4', 'landscape');
        $namafile = "data pendaftar-".$date.".pdf";
        // return view('pdf.tes',compact('data'));
        return $pdf->stream($namafile);
    }

    public function exportsudah()
    {
        $data = Formulir::where('status',2)->orderBy('no_tes')->get();
        $date = date('d F Y');
        $pdf = PDF::loadview('pdf.export', ['data' => $data])->setPaper('A4', 'landscape');
        $namafile = "data pendaftar-".$date.".pdf";
        // return view('pdf.tes',compact('data'));
        return $pdf->stream($namafile);
    }

    public function exportruangan()
    {
        $data = Formulir::max('ruangan');
        $date = date('d F Y');
        $pdf = PDF::loadview('pdf.ruangan', ['data' => $data])->setPaper('LEGAl', 'portrait');
        $namafile = "data ruangan-".$date.".pdf";
        // return view('pdf.tes',compact('data'));
        return $pdf->stream($namafile);
    }
}

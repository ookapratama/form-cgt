<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Formulir;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Pendaftaran;

use function PHPUnit\Framework\isNull;

class PendaftaranController extends Controller
{
    public function index()
    {
        $random = Str::random(5);
        $jurusan= Jurusan::where('status',1)->get();
        return view('pendaftaran.index',compact('jurusan'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nik' => 'required|unique:formulirs',
            'foto' => 'required|image|mimes:jpg,jpeg,png,svg,jpg|max:2048',

            
        ];

        $messages = [
            'nik.unique'=>'nik sudah terdaftar',
            
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $post = $request->all();
        $banyak =Formulir::max('no_formulir');
        if(is_null($banyak)){
            $post['no_formulir']=1;
        }else{
            $post['no_formulir']=$banyak+1;
        }
        $post['status']=1;
        $url = uploadFile_old(request()->file('foto'), "gambar/pendaftar", null);
        $post['foto']=$url;
        $data=Formulir::create($post);
        $nik = $data['nik'];
        return redirect('/selesai');
    }

    public function selesai()
    {
        return view('pendaftaran.selesai');
    }

    public function cek()
    {
        $stambuk = $_GET['stambuk'];
        $cek = Pendaftaran::where('stambuk', $stambuk)->count();
        if ($cek > 0){
            return response()->json(
                [

                    "valid" => false,
                ]
            );
        }else{
            return response()->json(
                [

                    "valid" => true,
                ]
            );
        } 
    }
}

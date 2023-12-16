<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Lowongan; 

class LowonganController extends Controller
{
    public function show(){
        $data ['lowongan'] = Lowongan::all();
        return view ('lowongann', $data);
    }

    public function add(){
        $data['lowongan'] = Lowongan::where('status','=','Posting')->get();
        return view('lowongan_add', $data);
    }

    public function create(Request $request){

        Lowongan::create([
            'nisn' => Auth::guard('alumni')->user()->nisn,
            'id_perusahaan' => $request->id_perusahaan,
            'id_admin' => $request->id_admin,
            'lowongan' => $request->lowongan,
            'syarat' => $request->syarat,
            'keahlian' => $request->keahlian,
            'kualifikasi' => $request->kualifikasi,
            'jam_kerja' => $request->jam_kerja,
            'gaji' => $request->gaji,
            'pendidikan' => $request->pendidikan,
            'tipe_kerja' => $request->tipe_kerja,
            'tgl_post' => date('Y-m-d'),
            'tg_konfirmasi' => $request->tg_konfirmasi,
            'status' => $request->status,
        ]);
    }

    public function hello()
    {
        $lowongan = Lowongan::all();
        return view('lowongan', ['lowongan' => $lowongan]);
    }
    public function addAdmin(){
        $data['lowongan'] = Lowongan::where('status','=','Posting')->get();
        return view('lowonganAdmin', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function show(){
        $data ['alumni'] = Alumni::all();
        return view ('alumni', $data);
    }

    public function add()
    {
        // $perusahaans = Perusahaan::where('status', '=', 'Posting')->get();
        $data ['alumni'] = Alumni::all();
        return view('alumniadd', $data);
    }

    public function create(Request $request){
        // Mengambil file foto dari request
        // if ($request->hasFile('foto')) {
        //     $fotoPath = $request->file('foto')->store();
        // }
        Alumni::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama_alumni' => $request->nama_alumni,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'foto' => $request->file('foto')->store('foto'),
            'password' => bcrypt($request->password),
        ]);
    
        // Redirect ke halaman form atau respons setelah data berhasil ditambahkan
        return redirect('/alumni')->with('success', 'Data perusahaan berhasil ditambahkan.');
        // Pastikan route 'perusahaan.create' mengarah ke halaman form pembuatan perusahaan
    }        
    
}

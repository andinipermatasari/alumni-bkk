<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan; 

class PerusahaanController extends Controller
{
    // ... fungsi lainnya ...
    public function show(){
        $data ['perusahaan'] = Perusahaan::all();
        return view ('perusahaann', $data);
    }
    
    // public function showw(){
    //     $data ['perusahaan'] = Perusahaan::all();
    //     return view ('perusahaan', $data);
    // }

    public function add()
    {
        // $perusahaans = Perusahaan::where('status', '=', 'Posting')->get();
        $data ['perusahaan'] = Perusahaan::all();
        return view('perusahaan_add', $data);
    }

    public function create(Request $request){
        // Mengambil file foto dari request
        // if ($request->hasFile('foto')) {
        //     $fotoPath = $request->file('foto')->store();
        // }
        Perusahaan::create([
            'perusahaan' => $request->perusahaan,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto'),
        ]);
    
        // Redirect ke halaman form atau respons setelah data berhasil ditambahkan
        return redirect('/perusahaann')->with('success', 'Data perusahaan berhasil ditambahkan.');
        // Pastikan route 'perusahaan.create' mengarah ke halaman form pembuatan perusahaan
    }        
    // Contoh dalam kontroler AdminController.php
    public function index()
    {
        $perusahaan = Perusahaan::all();
        return view('perusahaan', ['perusahaan' => $perusahaan]);
    }

    public function edit($id) {
        // Lakukan apa yang diperlukan untuk menampilkan form edit, misalnya:
        $perusahaan = Perusahaan::find($id);
        return view('editPerusahaan', compact('perusahaan'));
    }
    
    public function delete($id) {
        // Lakukan proses penghapusan, misalnya:
        $perusahaan = Perusahaan::find($id);
        $perusahaan->delete();
        // Redirect ke halaman lain atau lakukan sesuai kebutuhan
    }
    
}

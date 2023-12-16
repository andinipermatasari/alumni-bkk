<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{

    public function show(){
        $data ['testimoni'] = Testimoni::all();
        return view ('testimoni', $data);
    }

    public function add()
    {
        $data ['testimoni'] = Testimoni::all();
        return view('testimoni_add', $data);
    }

    public function create(Request $request){
        Testimoni::create([
            'nama' => $request->nama,
            'pesan' => $request->pesan,
        ]);
        
        return redirect('/testimoni')->with('success', 'Data perusahaan berhasil ditambahkan.');
    }     
    // public function showTestimoni()
    // {
    //     $testimoni = Testimoni::all(); // Ambil data testimoni dari model Testimoni

    //     return redirect('/', ['testimoni' => $testimoni]); // Kirim data testimoni ke view
    // }
    // Di dalam kontroler
    


}

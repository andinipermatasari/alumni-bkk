<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Admin;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index(Request $request){

        return view('landing');
    }

    public function testimoni()
    {
        $testimonies = Testimoni::all(); // Mendapatkan data testimoni dari model
        return view('testimoni', ['testimonies' => $testimonies]); // Mengirim variabel $testimonies ke tampilan
    }


    public function halamanlogin(){

        return view('login');
    }

    public function postlogin(Request $request)
    {
        $credentials = [
            'nisn' => $request->nisn,
            'password' => $request->password
        ];

        if (Auth::guard('alumni')->attempt($credentials)) {
            // Jika berhasil login
            return redirect()->intended('/'); // Ganti dengan halaman setelah login
        }else{
            return redirect()->back()->withErrors('Login gagal, periksa kembali nisn dan password Anda.');
        }
    }

    public function profile()
    {
        $data['alumni'] = Alumni::all();
        return view('profile', $data);
    }

    public function showTestimoni()
    {
        $testimoni = Testimoni::all(); // Ambil data testimoni dari model Testimoni

        return view('landing', ['testimoni' => $testimoni]); // Kirim data testimoni ke view
    }



    public function logout()
    {
        Auth::guard('alumni')->logout();

        return redirect('/'); 
    }

    public function loginadmin(){

        return view('loginadmin');
    }

    public function loginpost(Request $request)
    {
        $andini = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($andini)) {
            // Jika berhasil login
            return redirect()->intended('/dashboard'); // Ganti dengan halaman setelah login
        }else{
            return redirect()->back()->withErrors('Login admin gagal, periksa kembali email dan password Anda.');
        }
    }
    public function profileadmin()
    {
        $data['admin'] = Admin::all();
        return view('profileadmin', $data);
    }

    public function logoutadmin()
    {
        Auth::logout(); // Lakukan proses logout
        return redirect('/loginadmin'); // Redirect ke halaman login setelah logout
    }

    
}

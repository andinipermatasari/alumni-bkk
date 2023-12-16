<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function dashboard(){
        return view('dashboard');
    }
    function perusahaan(){
        
        return view('perusahaan');
    }
    function alumni(){
        
        return view('alumni');
    }
    function lowongan(){
        
        return view('lowongan');
    }
    function lamaran(){
        
        return view('lamaran');
    }
}

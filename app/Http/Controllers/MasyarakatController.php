<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function home()
    {
        $data_masyarakat = \App\Masyarakat::all();
        return view('masyarakat.home',['data_masyarakat' => $data_masyarakat]);
    }

    public function pengaduan(Request $request)
    {
        $data_masyarakat = \App\Masyarakat::all();
        return view('masyarakat.home',['data_masyarakat' => $data_masyarakat]);
    }
}

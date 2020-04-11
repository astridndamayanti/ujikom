<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function masyarakat()
    {
        $data_masyarakat = \App\Masyarakat::all();
        return view('admin.masyarakat',['data_masyarakat' => $data_masyarakat]);
    }
}

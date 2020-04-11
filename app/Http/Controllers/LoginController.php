<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
      if(Auth::attempt($request->only('username','password'))){
          if (Auth::user()->level == 'admin')
          {
              return redirect('/datamasyarakat');
          }
          elseif (Auth::user()->level == 'masyarakat')
          {
              return redirect('/home');
          }
          if (Auth::user()->level == 'petugas')
          {
              return redirect('/dashboard');
          }
      } 
      return redirect('/login');
    }

    public function register(Request $request)
    {
    // Insert ke tabel Users
      $user = new \App\User;
      $user->level = 'masyarakat';
      $user->name = $request->nama;
      $user->username = $request->username;
      $user->password = bcrypt($request->password);
      $user->save();

    //  Insert ke tabel Masyarakat
      $request->request->add(['user_id' => $user->id]);
      $masyarakat = \App\Masyarakat::create($request->all());
      return redirect('/login')->with('sukses','Anda berhasil mendaftarkan diri');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

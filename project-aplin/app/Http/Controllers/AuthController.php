<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class AuthController extends Controller
{
    public function login(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        $pengguna = Pengguna::where('username', $username)
                             ->where('password', $password)
                             ->first();

        if($pengguna) {

            
            if ($pengguna->Role == 0) {
                return redirect('/');
            } elseif ($pengguna->Role == 1) {
                return redirect('/securityadmin');
            }
             elseif ($pengguna->Role == 2) {
                return redirect('/superadmin');
            }
        } else {

            return back()->with('error', 'Username atau password salah.');
        }
    }
}

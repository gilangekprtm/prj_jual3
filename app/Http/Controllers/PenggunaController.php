<?php
//namespace App\Http\Controllers; 
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;  

// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use App\User;
// //use Illuminate\Foundation\Auth\RegistersUsers;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = DB::table('users')->get();
        return view('pengguna/index', compact('pengguna'));  //passing parameter asosiasi 
    }


    public function create()
    {
        return view('pengguna.create');
        //dd('cccc');
    }

    public function store(Request $request)
    {
        try {
            // dd($request['level_akses']);
            $query = DB::table('users')->insert([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'level_akses' => $request['level_akses']
            ]);

            return  redirect('pengguna')->with('status', 'Pengguna berhasil ditambah..');
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect('pengguna')->with('status', $ex);
        }
    }
}

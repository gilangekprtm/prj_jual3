<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd('index');
        $barang = DB::table('v_barang')->get();
        return view('barang/index', compact('barang'));  //passing parameter asosiasi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = DB::table('xtb_jenis_barang')->get();
        $pengguna = DB::table('xtb_userx')->get();

        return view('barang/create', compact('jenis'), compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try {
            $query = DB::table('xtb_barang')->insert([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'satuan' => $request->satuan,
                'stok' => $request->stok,
                'harga_jual' => $request->harga_jual,
                'id_jenis' => $request->id_jenis,
                'user_id' => $request->user_id
            ]);


            return  redirect('barang')->with('status', 'barang berhasil ditambah..');
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect('barang')->with('status', $ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $barang = DB::table('xtb_barang')->get();
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kode_barang)
    {
        // dd('edit');
        $jenis = DB::table('xtb_jenis_barang')->get();
        $pengguna = DB::table('xtb_userx')->get();
        $barang = DB::table('v_barang')->where('kode_barang', $kode_barang)->first();

        return  view('barang/edit', compact('barang', 'jenis', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_barang)
    {
        try {
            $affected = DB::table('xtb_barang')->where('kode_barang', $kode_barang)
                ->update([
                    'kode_barang' => $request->kode_barang,
                    'nama_barang' => $request->nama_barang,
                    'satuan' => $request->satuan,
                    'stok' => $request->stok,
                    'harga_jual' => $request->harga_jual,
                    'id_jenis' => $request->id_jenis
                ]);
            return  redirect('barang')->with('status', 'barang berhasil diubah..');
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect('barang')->with('status', 'barang gagal ditambah..');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode_barang)
    {
        // dd('delete');
        $barang = DB::table('xtb_barang')->where('kode_barang', $kode_barang)->delete();
        return  redirect('barang')->with('status', 'Data barang berhasil dihapus..');
    }
}

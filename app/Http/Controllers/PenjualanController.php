<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = DB::table('v_penjualan')->get();
        return view('penjualan/index', compact('penjualan'));
    }

    public function create()
    {
        $barang = DB::table('xtb_barang')->get();
        $suplier = DB::table('xtb_suplier')->get();
        $user = DB::table('xtb_userx')->get();

        return view('penjualan/create', compact('barang', 'suplier', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try {
            $query = DB::table('tbl_jual_barang')->insert([
                'nofak_jual' => $request->nofak_jual,
                'tgl_jual' => $request->tgl_jual,
                'jumlah_jual' => $request->jumlah_jual,
                'harga_jual' => $request->harga_jual,
                'kode_barang' => $request->kode_barang,
                'user_id' => $request->user_id,
            ]);


            return  redirect('penjualan')->with('status', 'penjualan berhasil ditambah..');
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect('penjualan')->with('status', $ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $penjualan = DB::table('v_penjualan')->get();
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nofak_jual)
    {
        // dd('edit');
        $barang = DB::table('xtb_barang')->get();
        $user = DB::table('xtb_userx')->get();
        $penjualan = DB::table('tbl_jual_barang')->where('nofak_jual', $nofak_jual)->first();
        return  view('penjualan/edit', compact('penjualan', 'barang', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nofak_jual)
    {
        // dd('update'); 
        try {
            $affected = DB::table('tbl_jual_barang')->where('nofak_jual', $nofak_jual)
                ->update([
                    'nofak_jual' => $request->nofak_jual,
                    'tgl_jual' => $request->tgl_jual,
                    'jumlah_jual' => $request->jumlah_jual,
                    'harga_jual' => $request->harga_jual,
                    'kode_barang' => $request->kode_barang,
                    'user_id' => $request->user_id,
                ]);
            return  redirect('penjualan')->with('status', 'penjualan berhasil diubah..');
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect('penjualan')->with('status', 'penjualan gagal ditambah..');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nofak_jual)
    {
        // dd('delete');
        $penjualan = DB::table('tbl_jual_barang')->where('nofak_jual', $nofak_jual)->delete();
        return  redirect('penjualan')->with('status', 'Data penjualan berhasil dihapus..');
    }
}
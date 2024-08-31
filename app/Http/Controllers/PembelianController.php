<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = DB::table('v_pembelian')->get();
        return view('pembelian/index', compact('pembelian'));
    }

    public function create()
    {
        $barang = DB::table('xtb_barang')->get();
        $suplier = DB::table('xtb_suplier')->get();
        $user = DB::table('xtb_userx')->get();

        return view('pembelian/create', compact('barang', 'suplier', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('store');
        try {
            $query = DB::table('tbl_beli_barang')->insert([
                'nofak_beli' => $request->nofak_beli,
                'tgl_beli' => $request->tgl_beli,
                'jumlah_beli' => $request->jumlah_beli,
                'harga_beli' => $request->harga_beli,
                'kode_barang' => $request->kode_barang,
                'harga_jual' => $request->harga_jual,
                'user_id' => $request->user_id,
                'id_suplier' => $request->id_suplier
            ]);


            return  redirect('pembelian')->with('status', 'Pembelian berhasil ditambah..');
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect('pembelian')->with('status', $ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $pembelian = DB::table('v_pembelian')->get();
        return view('pembelian.show', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nofak_beli)
    {
        // dd('edit');
        $barang = DB::table('xtb_barang')->get();
        $suplier = DB::table('xtb_suplier')->get();
        $pengguna = DB::table('xtb_userx')->get();
        $pembelian = DB::table('v_pembelian')->where('nofak_beli', $nofak_beli)->first();
        return  view('pembelian/edit', compact('pembelian', 'barang', 'suplier', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nofak_beli)
    {
        // dd('update'); 
        try {
            $affected = DB::table('tbl_beli_barang')->where('nofak_beli', $nofak_beli)
                ->update([
                    'nofak_beli' => $request->nofak_beli,
                    'tgl_beli' => $request->tgl_beli,
                    'jumlah_beli' => $request->jumlah_beli,
                    'harga_beli' => $request->harga_beli,
                    'kode_barang' => $request->kode_barang,
                    'harga_jual' => $request->harga_jual,
                    'user_id' => $request->user_id,
                    'id_suplier' => $request->id_suplier
                ]);
            return  redirect('pembelian')->with('status', 'Pembelian berhasil diubah..');
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect('pembelian')->with('status', 'Pembelian gagal ditambah..');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nofak_beli)
    {
        // dd('delete');
        $pembelian = DB::table('tbl_beli_barang')->where('nofak_beli', $nofak_beli)->delete();
        return  redirect('pembelian')->with('status', 'Data Pembelian berhasil dihapus..');
    }
}

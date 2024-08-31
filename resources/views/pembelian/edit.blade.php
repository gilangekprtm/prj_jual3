@extends('main')
@section('title', 'Data Pembelian')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./anggotas">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Pembelian</li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <div class="col-12">
                <div class="row">
                    <div class="card top-selling overflow-auto">
                        <div class="content mt-3">
                            <div class="animated fadeIn">

                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="card-header">
                                    <table aria-hidden="true" border="0" cellpadding="0" cellspacing="0"
                                        class="fa fa-text-height" class="fa fa-align-center" width="100%">
                                        <tr>
                                            <td>
                                                <h5 class="card-title">Ubah Data Pembelian</span></h5>
                                            </td>
                                            <td>
                                                <div align="right"><a class="btn btn-success btn-sm"
                                                        href="{{ url('./pembelian') }}">
                                                        <span class="bi bi-arrow-left-circle-fill" style="font-size:16px">
                                                            Back</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="col-12">
                                        <div class="card recent-sales overflow-auto">
                                            <div class="card-body">
                                                <form action="{{ url('pembelian/' . $pembelian->nofak_beli) }}"
                                                    enctype="multipart/form-data" method="post">

                                                    @method('put')
                                                    {{ csrf_field() }}
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nofak_beli">Nofak
                                                            Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="nofak_beli" readonly
                                                                required type="text"
                                                                value="{{ old('nofak_beli', $pembelian->nofak_beli) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="tgl_beli">Tanggal Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="tgl_beli"
                                                                required type="date"
                                                                value="{{ old('tgl_beli', $pembelian->tgl_beli) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="jumlah_beli">Jumlah Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="jumlah_beli" required
                                                                type="text"
                                                                value="{{ old('jumlah_beli', $pembelian->jumlah_beli) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="harga_beli">Harga Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="harga_beli" required
                                                                type="text" value="{{ old('harga_beli', $pembelian->harga_beli) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Kode Barang</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="kode_barang" name="kode_barang">
                                                                <option value="{{ old('kode_barang', $pembelian->kode_barang) }}">{{ old('kode_barang', $pembelian->kode_barang) }} - {{ old('kode_barang', $pembelian->nama_barang) }} </option>
                                                                @foreach ($barang as $item)
                                                                    <option value="{{ $item->kode_barang }}">
                                                                        {{ $item->kode_barang }} - {{ $item->nama_barang }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="harga_jual">Harga Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="harga_jual" required
                                                                type="text"
                                                                value="{{ old('harga_jual', $pembelian->harga_jual) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Id User</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="user_id" name="user_id">
                                                                <option value="{{ old('user_id', $pembelian->user_id) }}">{{ old('user_id', $pembelian->user_id) }} - {{ old('user_id', $pembelian->nm_user) }} </option>
                                                                <option
                                                                @foreach ($pengguna as $item)
                                                                    <option value="{{ $item->user_id }}">
                                                                        {{ $item->user_id }} - {{ $item->nm_user }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Id Suplier</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="id_suplier" name="id_suplier">
                                                                <option value="{{ old('id_suplier', $pembelian->id_suplier) }}">{{ old('id_suplier', $pembelian->id_suplier) }} - {{ old('id_suplier', $pembelian->nama_suplier) }} </option>
                                                                <option
                                                                @foreach ($suplier as $item)
                                                                    <option value="{{ $item->id_suplier }}">
                                                                        {{ $item->id_suplier }} - {{ $item->nama_suplier }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    



                                                    <button class="btn btn-success" style="font-size:16px"
                                                        type="submit"><span class="bi bi-pencil-square green-color"> Update
                                                        </span></button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection

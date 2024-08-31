@extends('main')
@section('title', 'Data penjualan')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./anggotas">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Penjualan</li>
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
                                                <h5 class="card-title">Ubah Data Penjualan</span></h5>
                                            </td>
                                            <td>
                                                <div align="right"><a class="btn btn-success btn-sm"
                                                        href="{{ url('./penjualan') }}">
                                                        <span class="bi bi-arrow-left-circle-fill" style="font-size:16px">
                                                            Back</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="col-12">
                                        <div class="card recent-sales overflow-auto">
                                            <div class="card-body">
                                                <form action="{{ url('penjualan/' . $penjualan->nofak_jual) }}"
                                                    enctype="multipart/form-data" method="post">

                                                    @method('put')
                                                    {{ csrf_field() }}
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nofak_jual">Nofak
                                                            Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="nofak_jual" readonly
                                                                required type="text"
                                                                value="{{ old('nofak_jual', $penjualan->nofak_jual) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="tgl_jual">Tanggal Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="tgl_jual"
                                                                required type="text"
                                                                value="{{ old('tgl_jual', $penjualan->tgl_jual) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="jumlah_jual">Jumlah Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="jumlah_jual" required
                                                                type="text"
                                                                value="{{ old('jumlah_jual', $penjualan->jumlah_jual) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="harga_jual">Harga Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="harga_jual" required
                                                                type="text" value="{{ old('harga_jual', $penjualan->harga_jual) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Nama Barang</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="kode_barang" name="kode_barang">
                                                                @foreach ($barang as $item)
                                                                    <option value="{{ $item->kode_barang }}">
                                                                        {{ $item->kode_barang }} - {{ $item->nama_barang }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">CUPERTINO</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="user_id" name="user_id">
                                                                @foreach ($user as $item)
                                                                    <option value="{{ $item->user_id }}">
                                                                        {{ $item->user_id }} - {{ $item->nm_user }}
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
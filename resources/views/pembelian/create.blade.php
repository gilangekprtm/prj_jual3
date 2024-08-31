@extends('main')
@section('title', 'Data Pembelian')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./pembelian">Master Data</a></li>
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
                                                <h5 class="card-title">Tambah Data Pembelian</span></h5>
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

                                                <form action="{{ url('pembelian') }}" enctype="multipart/form-data"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    <p>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nofak_beli">Nofak Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('nofak_beli') is-invalid @enderror"
                                                                name="nofak_beli" required type="text"
                                                                value="{{ old('nofak_beli') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="tgl_beli">Tanggal Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('tgl_beli') is-invalid @enderror"
                                                                name="tgl_beli" required type="date"
                                                                value="{{ old('tgl_beli') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="jumlah_beli">Jumlah Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('jumlah_beli') is-invalid @enderror"
                                                                name="jumlah_beli" required type="text"
                                                                value="{{ old('jumlah_beli') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="harga_beli">Harga Beli</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('harga_beli') is-invalid @enderror"
                                                                name="harga_beli" required type="text"
                                                                value="{{ old('harga_beli') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Kode Barang</label>
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
                                                        <label class="col-sm-2 col-form-label" for="harga_jual">Harga Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('harga_jual') is-invalid @enderror"
                                                                name="harga_jual" required type="text"
                                                                value="{{ old('harga_jual') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">User
                                                            Id</label>
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

                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Id Suplier</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="id_suplier" name="id_suplier">
                                                                @foreach ($suplier as $item)
                                                                    <option value="{{ $item->id_suplier }}">
                                                                        {{ $item->id_suplier }} - {{ $item->nama_suplier }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-success" style="font-size:16px"
                                                        type="submit"><span class="bi bi-save2 green-color"> Save
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

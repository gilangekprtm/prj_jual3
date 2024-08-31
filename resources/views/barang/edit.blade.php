@extends('main')
@section('title', 'Data Barang')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./anggotas">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Barang</li>
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
                                                <h5 class="card-title">Ubah Data Barang</span></h5>
                                            </td>
                                            <td>
                                                <div align="right"><a class="btn btn-success btn-sm"
                                                        href="{{ url('./barang') }}">
                                                        <span class="bi bi-arrow-left-circle-fill" style="font-size:16px">
                                                            Back</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="col-12">
                                        <div class="card recent-sales overflow-auto">
                                            <div class="card-body">
                                                <form action="{{ url('barang/' . $barang->kode_barang) }}"
                                                    enctype="multipart/form-data" method="post">

                                                    @method('put')
                                                    {{ csrf_field() }}

                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="kode_barang">Kode
                                                            Barang</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="kode_barang"
                                                                readonly required type="text"
                                                                value="{{ old('kode_barang', $barang->kode_barang) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nik">Nama
                                                            Barang</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="nama_barang"
                                                                required type="text"
                                                                value="{{ old('nama_barang', $barang->nama_barang) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nik">Satuan</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="satuan" required
                                                                type="text" value="{{ old('satuan', $barang->satuan) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nik">Stok</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="stok" required
                                                                type="text" value="{{ old('stok', $barang->stok) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nik">Harga
                                                            Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="harga_jual" required
                                                                type="text"
                                                                value="{{ old('harga_jual', $barang->harga_jual) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Id Jenis</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="id_jenis" name="id_jenis">
                                                                <option value="{{ old('id_jenis', $barang->id_jenis) }}">{{ old('id_jenis', $barang->id_jenis) }} - {{ old('id_jenis', $barang->jenis_barang) }} </option>
                                                                @foreach ($jenis as $item)
                                                                    <option value="{{ $item->id_jenis }}">
                                                                        {{ $item->id_jenis }} - {{ $item->jenis_barang }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Id User</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="user_id" name="user_id">
                                                                <option
                                                                @foreach ($pengguna as $item)
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


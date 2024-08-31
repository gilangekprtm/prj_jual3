@extends('main')
@section('title', 'Data Barang')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./jenis">Master Data</a></li>
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
                                                <h5 class="card-title">Tambah Data Barang</span></h5>
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

                                                <form action="{{ url('barang') }}" enctype="multipart/form-data"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    <p>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Kode
                                                            Barang</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('kode_barang') is-invalid @enderror"
                                                                name="kode_barang" required type="text"
                                                                value="{{ old('kode_barang') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Nama
                                                            Barang</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('nama_barang') is-invalid @enderror"
                                                                name="nama_barang" required type="text"
                                                                value="{{ old('nama_barang') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Satuan</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('satuan') is-invalid @enderror"
                                                                name="satuan" required type="text"
                                                                value="{{ old('satuan') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Stok</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('stok') is-invalid @enderror"
                                                                name="stok" required type="text"
                                                                value="{{ old('stok') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Harga
                                                            Jual</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('harga_jual') is-invalid @enderror"
                                                                name="harga_jual" required type="text"
                                                                value="{{ old('harga_jual') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Id Jenis</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="id_jenis" name="id_jenis">
                                                                @foreach ($jenis as $item)
                                                                    <option value="{{ $item->id_jenis }}">
                                                                        {{ $item->id_jenis }} - {{ $item->jenis_barang }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">User
                                                            Id</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="user_id" name="user_id">
                                                                @foreach ($pengguna as $item)
                                                                    <option value="{{ $item->user_id }}">
                                                                        {{ $item->user_id }} - {{ $item->nm_user }}
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

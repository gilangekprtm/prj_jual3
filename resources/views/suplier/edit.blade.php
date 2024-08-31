@extends('main')
@section('title', 'Data Suplier')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./anggotas">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Suplier</li>
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
                                                <h5 class="card-title">Ubah Data Suplier</span></h5>
                                            </td>
                                            <td>
                                                <div align="right"><a class="btn btn-success btn-sm"
                                                        href="{{ url('./suplier') }}">
                                                        <span class="bi bi-arrow-left-circle-fill" style="font-size:16px">
                                                            Back</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="col-12">
                                        <div class="card recent-sales overflow-auto">
                                            <div class="card-body">
                                                <form action="{{ url('suplier/' . $suplier->id_suplier) }}"
                                                    enctype="multipart/form-data" method="post">

                                                    @method('put')
                                                    {{ csrf_field() }}
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="id_suplier">Id
                                                            Suplier</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="id_suplier" readonly
                                                                required type="text"
                                                                value="{{ old('id_suplier', $suplier->id_suplier) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nik">Nama
                                                            Suplier</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="nama_suplier"
                                                                required type="text"
                                                                value="{{ old('nama_suplier', $suplier->nama_suplier) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nik">Alamat
                                                            Suplier</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="alamat_suplier"
                                                                required type="text"
                                                                value="{{ old('alamat_suplier', $suplier->alamat_suplier) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="nik">Telepon
                                                            Suplier</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus class="form-control" name="telepon_suplier"
                                                                required type="text"
                                                                value="{{ old('telepon_suplier', $suplier->telepon_suplier) }}">
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

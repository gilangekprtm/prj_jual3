@extends('main')
@section('title', 'Data Pengguna')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./penggunas">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Pengguna</li>
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
                                                <h5 class="card-title">Tambah Data pengguna</span></h5>
                                            </td>
                                            <td>
                                                <div align="right"><a class="btn btn-success btn-sm"
                                                        href="{{ url('./pengguna') }}">
                                                        <span class="bi bi-arrow-left-circle-fill" style="font-size:16px">
                                                            Back</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="col-12">
                                        <div class="card recent-sales overflow-auto">
                                            <div class="card-body">
                                                <form action="{{ url('pengguna') }}" enctype="multipart/form-data"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    <br>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" required type="text"
                                                                value="{{ old('name') }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="email" required
                                                                type="text" value="{{ old('email') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label"
                                                            for="password">Password</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="password" required
                                                                type="password" value="{{ old('password') }}"
                                                                value="koperasi321">
                                                        </div>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="level_akses">Level
                                                            Akses</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="level_akses"
                                                                name="level_akses">
                                                                <option value='{{ old('level_aks') }}'>
                                                                    {{ old('level_aks') }}</option>
                                                                <option value='1'>1</option>
                                                                <option value='2'>2</option>
                                                                <option value='3'>3</option>
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

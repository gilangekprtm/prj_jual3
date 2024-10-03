@extends('main')
@section('title', 'Data Pengguna')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./pengguna">Master Data</a></li>
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
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Proses...! </strong> {{ session('status') }}
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="alert"
                                            type="button"></button>
                                    </div>
                                @endif

                                <div class="card-header">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td>
                                                <h5 class="card-title">Data pengguna</span></h5>
                                            </td>
                                            <td>
                                                <div align="right">
                                                    <a aria-disabled="true" class="btn btn-success btn-sm"
                                                        href="{{ url('pengguna/show') }}" role="button">
                                                        <span class="bi bi-printer" style="font-size:16px"> Print
                                                            Data</span> </a>
                                                    <a class="btn btn-success btn-sm" href="{{ url('pengguna/create') }}">
                                                        <span class="bi bi-plus-circle" style="font-size:16px">
                                                            New</span></a>
                                                </div>

                                        </tr>
                                    </table>

                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>email</th>
                                                <th>Password</th>
                                                <th>Level Akses</th>
                                                <th>Tgl Dibuat</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengguna as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->password }}</td>
                                                    <td>{{ $item->level_akses }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        <form action="{{ url('penggunas/' . $item->id) }}" class="d-inline"
                                                            method="post" onsubmit="return confirm('Yakin Hapus Data')">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-success btn-sm"><span
                                                                    class="bi bi-trash"></span></button>
                                                    </td>
                                                    </form>
                                                    </ </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

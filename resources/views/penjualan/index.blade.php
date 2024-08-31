@extends('main')
@section('title', 'Barang')
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
                                                <h5 class="card-title">Data Penjualan</span></h5>
                                            </td>
                                            <td>
                                                <div align="right">
                                                    <a aria-disabled="true" class="btn btn-success btn-sm"
                                                        href="{{ url('penjualan/show') }}" role="button">
                                                        <span class="bi bi-printer" style="font-size:16px"> Print
                                                            Data</span>
                                                    </a>
                                                    <a class="btn btn-success btn-sm" href="{{ url('penjualan/create') }}">
                                                        <span class="bi bi-plus-circle" style="font-size:16px"> New</span>
                                                    </a>
                                                </div>
                                        </tr>
                                    </table>

                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nofak jual</th>
                                                <th>Tanggal jual</th>
                                                <th>Jumlah jual</th>
                                                <th>Harga jual</th>
                                                <th>Nama Barang</th>
                                                <th>Nama User</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penjualan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nofak_jual }}</td>
                                                    <td>{{ $item->tgl_jual }}</td>
                                                    <td>{{ $item->jumlah_jual }}</td>
                                                    <td>{{ $item->harga_jual }}</td>
                                                    <td>{{ $item->nama_barang }}</td>
                                                    <td>{{ $item->nm_user }}</td>
                                                <td>
                                                        <a class="btn btn-success btn-sm"
                                                            href="{{ url('penjualan/' . $item->nofak_jual . '/edit') }}">
                                                            <span class="bi bi-pencil-square"
                                                                style="font-size:12px"></span></a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ url('penjualan/' . $item->nofak_jual) }}"
                                                            class="d-inline" method="post"
                                                            onsubmit="return confirm('Yakin Hapus Data')">
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
@extends('main')
@section('title', 'Barang')
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
                                                <h5 class="card-title">Data Barang</span></h5>
                                            </td>
                                            <td>
                                                <div align="right">
                                                    <a aria-disabled="true" class="btn btn-success btn-sm"
                                                        href="{{ url('barang/show') }}" role="button">
                                                        <span class="bi bi-printer" style="font-size:16px"> Print
                                                            Data</span>
                                                    </a>
                                                    <a class="btn btn-success btn-sm" href="{{ url('barang/create') }}">
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
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Satuan</th>
                                                <th>Stok</th>
                                                <th>Harga Jual</th>
                                                <th>Id Jenis</th>
                                                <th>Nama User</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->kode_barang }}</td>
                                                    <td>{{ $item->nama_barang }}</td>
                                                    <td>{{ $item->satuan }}</td>
                                                    <td>{{ $item->stok }}</td>
                                                    <td>{{ $item->harga_jual }}</td>
                                                    <td>{{ $item->id_jenis }}</td>
                                                    <td>{{ $item->nm_user }}</td>
                                                    <td>
                                                        <a class="btn btn-success btn-sm"
                                                            href="{{ url('barang/' . $item->kode_barang . '/edit') }}">
                                                            <span class="bi bi-pencil-square"
                                                                style="font-size:12px"></span></a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ url('barang/' . $item->kode_barang) }}"
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

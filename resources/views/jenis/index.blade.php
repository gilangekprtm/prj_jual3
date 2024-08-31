@extends('main')
@section('title', 'Jenis')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./jenis">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Jenis barang</li>
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
                                                <h5 class="card-title">Data Jenis Barang</span></h5>
                                            </td>
                                            <td>
                                                <div align="right">
                                                    <a aria-disabled="true" class="btn btn-success btn-sm"
                                                        href="{{ url('jenis/show') }}" role="button">
                                                        <span class="bi bi-printer" style="font-size:16px"> Print
                                                            Data</span>
                                                    </a>
                                                    <a class="btn btn-success btn-sm" href="{{ url('jenis/create') }}">
                                                        <span class="bi bi-plus-circle" style="font-size:16px"> New</span>
                                                    </a>
                                                </div>

                                        </tr>
                                    </table>
                                    <div class="card-body table-responsive">
                                        <table class="table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th>Id jenis</th>
                                                    <th>Jenis Barang</th>
                                                    <th>Ubah</th>
                                                    <th>Hapus</th>
                                                </tr>
                                            </thead>

                                            <body>
                                                @foreach ($jenis as $item)
                                                    <tr>
                                                        <td>{{ $item->id_jenis }}</td>
                                                        <td>{{ $item->jenis_barang }}</td>
                                                        <td>
                                                            <a class="btn btn-success btn-sm"
                                                                href="{{ url('jenis/' . $item->id_jenis . '/edit') }}">
                                                                <span class="bi bi-pencil-square"
                                                                    style="font-size:12px"></span></a>
                                                        </td>
                                                        <td>
                                                            <form action="{{ url('jenis/' . $item->id_jenis) }}"
                                                                class="d-inline" method="post"
                                                                onsubmit="return confirm('Yakin Hapus Data')">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-success btn-sm">
                                                                    <span class="bi bi-trash"></span>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </body>
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

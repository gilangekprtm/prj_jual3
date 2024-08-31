@extends('main')
@section('title', 'Data Anggota')
@section('breadcrumbs')

    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./barang">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Penjualan</li>
                </ol>
            </nav>
        </div>

        <head>
            <script type="text/javascript">
                function printDiv(divName) {
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();

                    document.body.innerHTML = originalContents;
                }
                printDiv('printableArea');
            </script>

            <table aria-hidden="true" border="0" cellpadding="0" cellspacing="0" class="fa fa-align-center"
                class="fa fa-text-height" width="100%">
                <tr align="right">
                    <td>
                        <a class="btn btn-success btn-sm" href="#" onclick="printDiv('printableArea')">
                            <span class="bi bi-printer" style="font-size:16px"> Print Data</span>
                        </a>
                        <a class="btn btn-success btn-sm" href="{{ url('./penjualan') }}">
                            <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span>
                        </a>
                    </td>
                </tr>
            </table>


            <div id="printableArea">
                <td align="center">
                    <h5 align="center" class="card-title">Daftar Penjualan</h5>
                </td>
                <table border="1" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr bgcolor="gray">
                            <th>No.</th>
                            <th>Nofak jual</th>
                            <th>Tanggal jual</th>
                            <th>Jumlah jual</th>
                            <th>Harga jual</th>
                            <th>Nama Barang</th>
                            <th>Nama User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($penjualan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nofak_jual }}</td>
                                <td>{{ $item->tgl_jual }}</td>
                                <td>{{ $item->jumlah_jual }}</td>
                                <td>{{ $item->harga_jual }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->nm_user }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

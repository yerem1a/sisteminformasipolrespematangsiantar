@include('user.layouts.head')
@include('user.layouts.header')
@include('user.layouts.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Status Laporan</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div style="background-color: #ffffff; padding: 20px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Status Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporanData as $laporan)
                            <tr>
                                <td>{{ $laporan->comments }}</td>
                                <td>{{ $laporan->created_at }}</td>
                                <td>
                                    @if ($laporan->isCheck == 0)
                                        Belum Dilaporkan
                                    @elseif ($laporan->isCheck == 1)
                                        Sudah Dilaporkan
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('user.layouts.js')

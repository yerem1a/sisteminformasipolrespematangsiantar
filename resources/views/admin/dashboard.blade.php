@include('admin.layouts.head')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan Masyarakat</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="content">
        <div class="container-fluid">
            <!-- Example: Displaying Data in a Table -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Laporan Masyarakat</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Bidang</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laporanData as $laporan)
                        <tr>
                            <td>
                                @if($laporan->option == 1)
                                    Lalu Lintas
                                @elseif($laporan->option == 2)
                                    Premanisme
                                @elseif($laporan->option == 3)
                                    Sabhara
                                @elseif($laporan->option == 4)
                                    Bareskrim
                                @elseif($laporan->option == 5)
                                    Propam
                                @else
                                    Tidak Diketahui
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset('image').'/'.$laporan->image_path }}" style="width: 300px; height:300px">
                                </td>
                            <td>{{ $laporan->comments }}</td>
                            <td>{{ $laporan->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Example -->

        </div>
    </section>
    <!-- /.content -->
</div>

{{-- @include('js') --}}
@include('admin.layouts.js')

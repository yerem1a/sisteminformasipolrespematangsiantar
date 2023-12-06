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
                                        <th>Laporkan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporanData as $laporan)
                                        <tr>
                                            <td>
                                                @if ($laporan->option == 1)
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
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#imageModal{{ $laporan->id }}">
                                                    Lihat Gambar
                                                </button>

                                                <!-- Image Modal -->
                                                <!-- Image Modal -->
                                                <div class="modal fade" id="imageModal{{ $laporan->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="imageModal{{ $laporan->id }}">Gambar Laporan
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>

                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ asset('image') . '/' . $laporan->image_path }}"
                                                                    style="width: 100%; height: auto;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td>{{ $laporan->comments }}</td>
                                            <td>{{ $laporan->created_at }}</td>
                                            <td>
                                                <div class="container mt-5">
                                                    @php
                                                        $whatsappNumbers = [
                                                            1 => '6281111111111', // Replace with the actual numbers for each option
                                                            2 => '6282222222222',
                                                            3 => '6283333333333',
                                                            4 => '6284444444444',
                                                            5 => '6285555555555',
                                                        ];
                                                        $whatsappNumber = $whatsappNumbers[$laporan->option] ?? ''; // Default to empty string if option not found
                                                    @endphp

                                                    <a href="https://wa.me/{{ $whatsappNumber }}?text=Ada%20laporan%20baru%20di%20sistem%20admin"
                                                        class="btn btn-primary">Ada Laporan Baru!</a>
                                                </div>
                                            </td>
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


@include('admin.layouts.js')
<!-- Bootstrap CSS -->

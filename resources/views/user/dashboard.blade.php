@include('user.layouts.head')
@include('user.layouts.header')
@include('user.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengaduan Laporan</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <section class="content">
        <div class="container-fluid">
            <div style="background-color: #ffffff; padding: 20px;">
                <form action="{{ route('laporan.submit') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- Dropdown -->
                    <div class="mb-3">
                        <label for="serviceOption" class="form-label">Bidang Laporan:</label>
                        <select class="form-select" id="serviceOption" name="serviceOption">
                            <option value="1">Lalu Lintas</option>
                            <option value="2">Premanisme</option>
                            <option value="3">Sabhara</option>
                            <option value="4">Bareskrim</option>
                            <option value="5">Propam</option>
                        </select>
                    </div>

                    <!-- File Upload for Images -->
                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Upload gambar</label>
                        <input type="file" class="form-control" id="imageInput" name="imageInput"
                            accept="image/jpeg, image/png">
                    </div>

                    <!-- Text Area for Comments -->
                    <div class="mb-3">
                        <label for="comments" class="form-label">Keterangan Laporan:</label>
                        <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>

@include('user.layouts.js')

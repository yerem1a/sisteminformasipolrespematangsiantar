<!-- section.blade.php -->
<section id="about" style="padding: 80px 0;">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Tentang Polres Pematang Siantar</h2>
                <p class="lead">Polres pematang siantar adalah salah satu bagian dari Polda Sumatera Utara yang bertempat di Kota Pematang Siantar, Provinsi Sumatera Utara. Polres adalah singkatan dari Kepolisi Resort dan Polres Pematang Siantar adalah salah satu unit kepolisian di tingkat kota yang bertanggung jawab atas penegakan hukum di wilayahnya. Polres Pematang Siantar memiliki tanggung jawab untuk menjaga keamanan dan ketertiban di kota tersebut, menginvestigasi kejahatan, dan melaksanakan tugas-tugas kepolisian lainnya sesuai dengan hukum yang berlaku.</p>
            </div>
        </div>
    </div>
</section>

{{-- services --}}
<section class="bg-light" id="services" style="padding: 80px 0;"> 
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Keluhan anda...</h2>
                <p class="lead">Selamat datang di layanan keluhan kami. Kami senantiasa berusaha untuk meningkatkan kualitas pelayanan kepada masyarakat. Jika Anda memiliki keluhan atau masukan terkait layanan kami, silakan berikan informasinya di sini. Kami sangat menghargai kontribusi Anda dalam membantu kami menciptakan lingkungan yang lebih aman dan terpercaya.</p>

                <!-- Button to Show Modal -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal">
                    Laporan
                </button>

                <!-- Modal -->
                <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="serviceModalLabel">Form Laporan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form inside the Modal -->
                                <form>
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- akhir dari servies --}}
<!-- section.blade.php -->
<section id="contact" style="padding: 80px 0;">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Alamat Kami</h2>
                <div class="location">
                    <img src="{{ asset('asset') }}/img/location.png" alt="Location Icon" height="30" width="30">
                    Jl. Sudirman, Simalungun, Kec. Siantar Bar., Kota Pematang Siantar, Sumatera Utara 21184
                </div>

                <div class="phone">
                    <img src="{{ asset('asset') }}/img/phone.png" alt="Phone Icon" height="30" width="30">
                    (0622) 21500
                </div>
            </div>
        </div>
    </div>
</section>


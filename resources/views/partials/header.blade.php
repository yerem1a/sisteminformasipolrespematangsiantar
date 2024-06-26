<!-- header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">
        {{-- <a class="navbar-brand" href="#page-top">Polres Pematang Siantar</a> --}}
        <a class="navbar-brand" href="#page-top">
            <img src="{{ asset('asset') }}/img/logo.png" alt="Polres Pematang Siantar Logo" height="auto" width="30"
                style="margin-right: 10px;">Polres Pematang Siantar
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

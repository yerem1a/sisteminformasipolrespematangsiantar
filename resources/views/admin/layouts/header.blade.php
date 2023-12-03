<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="/" class="nav-link">Home</a>
              </li>
              
          </ul>
  
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
              <!-- Logout Button -->
              <li class="nav-item">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-link nav-link">Logout</button>
                  </form>
              </li>
          </ul>
      </nav>

      <!-- ... your other content ... -->
  </div>

  <!-- ... your other scripts ... -->
</body>

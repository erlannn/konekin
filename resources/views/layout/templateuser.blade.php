<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KONEKIN</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Link CSS ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <section class="vh-200 gradient-custom">
        <div class="container py-5 h-100">
            
          <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-none text-white">
  <!-- Container wrapper -->
  

        <a class="navbar-brand me-5" class="gambarnav" href="/">
          <img src="img/konekin-bulat.png" alt="" class="d-inline-block align-text-top"><h4 class="d-inline-block align-text-top ms-3 mt-2">Berrvy</h4>
        </a>
      <!-- Toggle button -->
    <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarButtonsExample"
    aria-controls="navbarButtonsExample"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <div class="iconnav"><i class="bi bi-border-width"></i></div>
  </button>  

  <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse " id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link ms-5 " href="/konekin">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-active ms-5 " href="/community">Community</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-active ms-5 " href="/aboutkonekin">About</a>
              </li>
            </ul>
          </div>
    <!-- Left links -->
          <div class="d-flex" id="dropdownMenuButton1">
            <div class="navbar-nav">
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="akun">
                  Hallo,Anisya, M.kom
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </div>
            </div>
          </div>
    </div>

</nav>

<br>
        
<div class="container">
  @yield('content')
  </div>

<br><br><br><br>

      </div>
        
    </section>


      

<!-- -->
<script src="script.js"></script>
<!-- Script JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
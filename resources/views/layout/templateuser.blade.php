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
                <a class="nav-link ms-5 " href="/homekonekin">Home</a>
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
                <ul class="dropdown-menu text-black">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </div>
            </div>
          </div>
    

</nav>

<br>
        
<div class="container">
  @yield('content')
  </div>

<br><br><br><br>

<footer class="bg-none text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
        
        <h4 class="jf"><img src="img/konekin-bulat.png" alt="konekin" class="logo"> Konekin</h4>
        <p class="col-10 text-secondary">
          Connect with like-minded experts, enhance your knowledge and skills, and accelerate your career. Become part of a community-owned company.
        </p>
        <ul class="list-unstyled mt-5 mb-0">
          <li>
            <a href=""><i class="bi bi-twitter-x me-5 text-white"></i></a>
            <a href="https://www.instagram.com/erlannn.s" target="_blank"><i class="bi bi-instagram text-white"></i></a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="jf">Company</h5>

        <ul class="list-unstyled mb-0 text-secondary">
          <li class="mb-4">
            <a href="" class="text-secondary text-decoration-none">About</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Carrer</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Mobile</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="jf">Contact</h5>

        <ul class="list-unstyled mb-0 text-secondary">
          <li class="mb-4">
            <a href="" class="text-secondary text-decoration-none">Why Konekin?</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Partner with us</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">FAQ's</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Blog</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="jf">Meet us</h5>

        <ul class="list-unstyled mb-0 text-secondary">
          <li class="mb-4">
            <a href="" class="text-secondary text-decoration-none">+0813212493969</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">info@bang.udah.bang</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Jl.Gajah mada</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

</footer>

</div>
        
    </section>


      

<!-- -->
<script src="script.js"></script>
<!-- Script JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
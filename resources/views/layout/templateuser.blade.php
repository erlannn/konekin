<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
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
<nav class="navbar navbar-expand-lg bg-none">
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
                <a class="nav-link ms-5 " href="/community">Community</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ms-5 " href="/about">About</a>
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
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </div>
            </div>
          </div> 

</nav>
<br>



  @yield('content')

    

<br><br><br><br>

<footer class="bg-none text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        
        <h4 class="jf"><img src="img/konekin-bulat.png" alt="konekin" class="logo"> Konekin</h4>
        <p class="col-10 text-secondary">
          Let's Discuss!. <br> Have a project or question?, <br> we want to hear your opinion.
        </p>
        <ul class="list-unstyled me-5">
          <li class="mt-5 me-5">
            <p class="text-center text-secondary"><span>&copy;</span> All Rights Reserved Konekin.</p>
          </li>
        </ul>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="jf">Community</h5>

        <ul class="list-unstyled mb-0 text-secondary">
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Network</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Developer</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">Multimedia</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5 class="jf">Contact</h5>

        <ul class="list-unstyled mb-0 text-secondary">
          <li class="mb-4">
            <a href="" class="text-secondary text-decoration-none">About us</a>
          </li>
          <li class="mb-4">
            <a href="https://www.instagram.com/hmti.itp" target="_blank" class="text-secondary text-decoration-none">Our instagram</a>
          </li>
          <li class="mb-4">
            <a href="#!" class="text-secondary text-decoration-none">konekin@gmail.com</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="jf">Meet us</h5>

        <ul class="list-unstyled mb-0 text-secondary">
          <li class="mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31914.744214320144!2d100.35102839501111!3d-0.884395131907496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8a526503fa9%3A0x7485c0496ad30308!2sInstitut%20Teknologi%20Padang!5e0!3m2!1sid!2sid!4v1703349535007!5m2!1sid!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<!-- Script JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
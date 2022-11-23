<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Painel Principal - SGE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">



  <!-- Vendor CSS Files -->
  <link href="<?= asset('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= asset('assets/vendor/bootstrap-icons/bootstrap-icons.cs') ?>s" rel="stylesheet">
  <link href="<?= asset('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= asset('assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
  <link href="<?= asset('assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
  <link href="<?= asset('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= asset('assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?=asset('assets/img/logotipo.png')?>" alt="">
        <span class="d-none d-lg-block"> SGE</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?=asset('assets/img/messages-1.jpg')?>" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?=asset('assets/img/messages-2.jpg')?>" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?=asset('assets/img/messages-3.jpg')?>" alt="" class="rounded-circle">
                <div>
                  <h4>Scott Bower</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?=asset('assets/img/profile-img.jpg')?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">V_C</span>
          </a><!-- End Profile Image Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Victor Clever</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?=BASE_URL.'sair'?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sair</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid-3x3-gap"></i>
          <span>Painel Principal</span>
        </a>
      </li><!-- End Painel Principal Nav -->

      
      <li class="nav-item">
        <a class="nav-link " href="<?=BASE_URL.'cadastros'?>">
          <i class="bi bi-grid-3x3-gap"></i>
          <span>Cadastrar</span>
        </a>
      </li><!-- End Cadastrar Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#estudante-nav" data-bs-toggle="collapse" href="#">
          <img src="<?=asset('imagens/student.png')?>" width="20px" height="20px" style="margin-right: 7px;"><span>Estudantes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="estudante-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?=BASE_URL.'alunos'?>">
              <i class="bi bi-circle"></i><span>Listar</span>
            </a>
          </li>
        </ul>
      </li><!-- End estudante -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#banca-nav" data-bs-toggle="collapse" href="#">
          <img src="<?=asset('imagens/banca.png')?>" width="20px" height="20px" style="margin-right: 7px;"><span>Banca</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="banca-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="banca-lista.html">
              <i class="bi bi-circle"></i><span>Listar</span>
            </a>
          </li>
        </ul>
      </li><!-- End estudante -->

      </li><!-- monografia -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#estagio-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-briefcase-fill"></i><span>Estagio</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="estagio-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="estagio.html">
              <i class="bi bi-circle"></i><span>Listar</span>
            </a>
          </li>

        </ul>
      </li><!-- End estagio -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cursos-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book-half"></i><span>Cursos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cursos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="cursos-lista.html">
              <i class="bi bi-circle"></i><span>Listar</span>
            </a>
          </li>
        </ul>
      </li><!-- End cursos -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="empresa.html">
          <i class="bi bi-building"></i>
          <span>Empresa</span>
        </a>
      </li><!-- End empresa Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="edicao.html">
          <img src="<?=asset('imagens/edicao.png')?>" width="22px" height="20px" style="margin-right: 7px;">
          <span>Edições</span>
        </a>
      </li><!-- End edicao Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="relatorio.html">
          <img src="<?=asset('imagens/relatorio.png')?>" width="20px" height="20px" style="margin-right: 7px;">

          <span>Relatório</span>
        </a>
      </li><!-- End Relatorio Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="settings.html">
          <i class="bi bi-gear"></i>
          <span>Settings</span>
        </a>
      </li><!-- End settings -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-door-open"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    
    <?php
    
    /**
    * LOAD PAGES HERE
    * 
    */
    $file = dirname(__DIR__). DIRECTORY_SEPARATOR . str_replace('.php','',$page).'.php';
    require_once $file;
    
    ?>
  
  
  
  </main><!-- End #main -->
  <br><br><br><br>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Project Clever</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="victor/index.html">Victor_Clever</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= asset('assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?= asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= asset('assets/vendor/chart.js/chart.min.js') ?>"></script>
  <script src="<?= asset('assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?= asset('assets/vendor/quill/quill.min.js') ?>"></script>
  <script src="<?= asset('assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?= asset('assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?= asset('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= asset('assets/js/main.js') ?>"></script>



</body>

</html>
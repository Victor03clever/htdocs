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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logotipo.png" alt="">
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
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
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
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
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
              <a class="dropdown-item d-flex align-items-center" href="login.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
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
        <a class="nav-link collapsed" data-bs-target="#estudante-nav" data-bs-toggle="collapse" href="#">
          <img src="<?=asset('imagens/student.png')?>" width="20px" height="20px" style="margin-right: 7px;"><span>Estudantes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="estudante-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="estudante-cadastro.html">
              <i class="bi bi-circle"></i><span>Cadastrar</span>
            </a>
          </li>
          <li>
            <a href="estudante-lista.html">
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
          <img src="imagens/edicao.png" width="22px" height="20px" style="margin-right: 7px;">
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
        <a class="nav-link collapsed" href="login.html">
          <i class="bi bi-door-open"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Painel Principal</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
          
          <div class="col-xxl col-md" style="background-color: #525F7F; margin: 5px; height: 130px; border-radius: 5px; position: relative; border:.5px  #4154f1 solid">
            
            <h6 style="color: #fff; font-weight: bold; margin-top: 5px; font-size: large;">Banca /<span style="color: #00CC88; font-weight: bold;"> Total</span></h6>

              <div class="d-flex align-items-center">
                <a class="small text-white stretched-link" href="#"></a>
                <h6 style=" position: absolute; top: 30%; left: 40%; color: #fff; font-size:xx-large;"><strong>145</strong></h6>
                </a>
                <div class="col-auto">
                  <img src="imagens/edicao.png" width="50px" style="margin-right: 7px;">
              </div>
                <div class="card-footer w-100 " style="position:absolute; top: 76%; height: 20px; left: 0%; background-color:#4c566e;">
                  <a class="small text-white stretched-link" href="#"><span style="position:absolute;top:10%;"> Edição 2020-2021</span></a>
              </div>
            </div>
        
          </div>
        
        
          <div class="col-xxl col-md" style="background-color: #5C60F5;margin: 5px; height: 130px; border-radius: 5px; position: relative; border:.5px #4154f1 solid">
            
            <h6 style="color: #fff; font-weight: bold; margin-top: 5px; font-size: large;">Monografia /<span style="color: #00CC88; font-weight: bold;"> Total</span></h6>

            <div class="d-flex align-items-center">
              <a class="small text-white stretched-link" href="#">
              <h6 style=" position: absolute; top: 30%; left: 40%; color: #fff; font-size:xx-large;"><strong>145</strong></h6>
            </a>
            <div class="col-auto">
              <img src="imagens/book.png" width="50px" style="margin-right: 7px;">
          </div>
            <div class="card-footer w-100 " style="position:absolute; top: 76%; height: 20px; left: 0%; background-color:#393fafd5;">
              <a class="small text-white stretched-link" href="#"><span style="position:absolute;top:10%;"> Edição 2020-2021</span></a>
          </div>
          </div>

          </div>
        
        
          <div class="col-xxl col-md" style="background-color: #525F7F;margin: 5px; height: 130px; border-radius: 5px; position: relative; border:.5px  #4154f1 solid">
            
            <h6 style="color: #fff; font-weight: bold; margin-top: 5px; font-size: large;">Estágios /<span style="color: #00CC88; font-weight: bold;"> Total</span></h6>

              <div class="d-flex align-items-center">
                <a href="#" class="small text-white stretched-link">
                <h6 style=" position: absolute; top: 30%; left: 40%; color: #fff; font-size:xx-large;"><strong>145</strong></h6>
              </a>
              <div class="col-auto">
                <img src="imagens/paste.png" width="50px" style="margin-right: 7px;">
            </div>
              <div class="card-footer w-100 " style="position:absolute; top: 76%; height: 20px; left: 0%; background-color:#4c566e;">
                <a class="small text-white stretched-link" href="#"><span style="position:absolute;top:10%;"> Edição 2020-2021</span></a>
            </div>
            </div>

          </div>
        
        </div>
<br>
<br>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tabela de dados</h5>
            <!-- data table -->
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Edições</th>
                  <th scope="col">Defesas</th>
                  <th scope="col">Relatórios/Estágios</th>
                  <th scope="col">Banca</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2019-2020</td>
                  <td>10</td>
                  <td>47</td>
                  <td>KZ-12000</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>2020-2021</td>
                  <td>13</td>
                  <td>45</td>
                  <td>2014-12-05</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>2021-2022</td>
                  <td>11</td>
                  <td>42</td>
                  <td>2011-08-12</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>2022-2023</td>
                  <td>15</td>
                  <td>44</td>
                  <td>2012-06-11</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>2023-2024</td>
                  <td>17</td>
                  <td>30</td>
                  <td>2011-04-19</td>
                </tr>
              </tbody>
            </table>
          </div>  
        </div>    <!-- End Bordered Table -->

        <section class="section">
          <div class="row">
   
        <div class="col-xxl col-xxl">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gráfico Pizza</h5>
              <!-- Pie Chart -->
              <div id="pieChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [1, 1, 1],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Monografias', 'Defesas', 'Estudantes']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>

        <div class="col-xxl col-xxl">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gráfico Barra/Estagios</h5>
               <!-- Bar Chart -->
               <div id="barChart" style="min-height: 400px;" class="echart"></div>

               <script>
                 document.addEventListener("DOMContentLoaded", () => {
                   echarts.init(document.querySelector("#barChart")).setOption({
                     xAxis: {
                       type: 'category',
                       data: ['2019', '2020', '2021', '2022', '2023', '2024', '2025']
                     },
                     yAxis: {
                       type: 'value'
                     },
                     series: [{
                       data: [10, 8, 6, 7, 4, 0, 0],
                       type: 'bar'
                     }]
                   });
                 });
               </script>
               <!-- End Bar Chart -->

              </div>
          </div>
        </div>
      </div>
    </section>
        

        


          

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
  <script src="<?=asset('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  

</body>

</html>
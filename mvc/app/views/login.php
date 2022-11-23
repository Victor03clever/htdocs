<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?=asset('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?=asset('assets/vendor/bootstrap-icons/bootstrap-icons.cs')?>s" rel="stylesheet">
  <link href="<?=asset('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?=asset('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
  <link href="<?=asset('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
  <link href="<?=asset('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
  <link href="<?=asset('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">
  <!--itype-->
  <script src="victor/index.js"></script>
  <link rel="stylesheet" href="<?=asset('assets/css/style.css')?>">
  
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="<?=BASE_URL?>" class=" d-flex align-items-center w-auto">
                  <img src="<?=asset('assets/img/logotipo.png')?>" width="100px" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="text-center pb-0 fs-3" style="color: #0070BA;"><span class="ityped"></span></h5>
                    <!-- <p class="text-center small">Entre com tipo de usuário e a senha para Logar</p> -->
                  </div>

                  <form method="POST" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="login" class="form-label">Login</label>
                      <div class="input-group has-validation">
                        <input type="text" name="login" class="form-control" id="login" required>
                        <div class="invalid-feedback">Porfavor entre com usuario!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="senha" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" id="senha" required>
                      <div class="invalid-feedback">Porfavor entre com a senha!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Lembrar-me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn w-100 btn-primary" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Não está cadastrado? <a href="<?=BASE_URL?>cadastro">Cadastre-se</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
               
                Designed by <a href="#">Victor_Clever</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=asset('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/chart.js/chart.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/echarts/echarts.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/quill/quill.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/simple-datatables/simple-datatables.js')?>"></script>
  <script src="<?=asset('assets/vendor/tinymce/tinymce.min.js')?>"></script>
  <script src="<?=asset('assets/vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=asset('assets/js/main.js')?>"></script>



  <!--itype-->
  <script>
    window.ityped.init(document.querySelector(".ityped"), {
        showCursor: true,
        strings: [' ','Realizar Login'],
        backDelay:2000,
        startDelay:1000
        
    })

</script>

</body>

</html>
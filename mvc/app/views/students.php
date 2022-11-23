<div class="pagetitle">
      <h1>Listagem</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Estudantes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista Dos Estudantes</h5>

            <?=getFlash('message')?>
              <!-- Table with stripped rows -->
              <table class="table datatable table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Encarregado</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tutor</th>
                    <th>Accoes</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $key => $student):?>
                        <tr>
                            <th scope="row"><?=$student['idAluno']?></th>
                            <td><?=$student['nome']?></td>
                            <td><?=$student['Encarregado']?></td>
                            <td><?=$student['email']?></td>
                            <td><?=$student['tutor']?></td>
                            <td>
                            <a href="#">Editar</a>
                            <a href="<?=BASE_URL.'alunos/remover/'.$student['idAluno']?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
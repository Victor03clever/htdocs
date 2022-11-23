<div class="pagetitle">
      <a href="estudante-cadastro">
        <h1>Cadastramento</h1>
      </a>
    </div><!-- End Page Title -->
    <br><br>
    <?=getFlash('message')?>
    <section class="section">
      <div class="card">
        <div class="card-body">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-aluno-tab" data-bs-toggle="tab" data-bs-target="#nav-aluno"
                type="button" role="tab" aria-controls="nav-aluno" aria-selected="true">Estudante</button>
              <button class="nav-link" id="nav-curso-tab" data-bs-toggle="tab" data-bs-target="#nav-curso" type="button"
                role="tab" aria-controls="nav-curso" aria-selected="false">Cursos</button>
              <button class="nav-link" id="nav-empresa-tab" data-bs-toggle="tab" data-bs-target="#nav-empresa"
                type="button" role="tab" aria-controls="nav-empresa" aria-selected="false">Empresas</button>
              <button class="nav-link" id="nav-mono-tab" data-bs-toggle="tab" data-bs-target="#nav-mono" type="button"
                role="tab" aria-controls="nav-mono" aria-selected="false">Monografias</button>
              <button class="nav-link" id="nav-tutor-tab" data-bs-toggle="tab" data-bs-target="#nav-tutor" type="button"
                role="tab" aria-controls="nav-tutor" aria-selected="false">Tutores</button>
              <button class="nav-link" id="nav-estagio-tab" data-bs-toggle="tab" data-bs-target="#nav-estagio"
                type="button" role="tab" aria-controls="nav-estagio" aria-selected="false">Estagios</button>
              <button class="nav-link" id="nav-superv-tab" data-bs-toggle="tab" data-bs-target="#nav-superv"
                type="button" role="tab" aria-controls="nav-superv" aria-selected="false">superVisor Estagio</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-aluno" role="tabpanel" aria-labelledby="nav-aluno-tab">


              <form class="row g-3 needs-validation" novalidate method="post"  action="<?=BASE_URL.'alunos/adicionar'?>">

                <legend><br> Dados Pessoais</legend>
                <div class="col-md-4">
                  <label for="nome_aluno" class="form-label">Estudante</label>
                  <input type="text" class="form-control" id="nome_aluno" name="nome"
                    placeholder="Nome do Estudante" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="nome_encarregado" class="form-label">Encarregado de Educação</label>
                  <input type="text" class="form-control" id="nome_encarregado" name="encarregado"
                    placeholder="Nome do Encarregado" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="data_nascimento" class="form-label">Data de Nascimento</label>

                  <input type="date" class="form-control" id="data_nascimento" name="ano_nasc" required>
                  <div class="invalid-feedback">
                    Preencha o Campo

                  </div>
                </div>
                <div class="col-md-5">
                  <label for="residencia" class="form-label">Residência</label>
                  <input type="text" class="form-control" id="residencia" name="morada" placeholder="Residência"
                    required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="email" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend"
                      required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="contacto" class="form-label">Phone</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">+244</span>
                    <input type="text" class="form-control" id="contacto" name="contacto" required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-md-4">
                  <label for="sexo" class="form-label">Sexo</label>
                  <div class="input-group has-validation">
                    <select name="sexo" id="sexo" class="form-control">
                      <option disabled selected>Selecionar sexo</option>
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                    </select>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-md-4">
                  <label for="Tutor_IdTutor" class="form-label">Tutor</label>
                  <div class="input-group has-validation">
                    <select name="Tutor_IdTutor" id="Tutor_IdTutor" class="form-control">
                      <option disabled selected>Selecionar um tutor ao aluno</option>
                      <?php foreach ($tutores as $tutor):?>
                      <option value="<?=$tutor['idTutor']?>"><?=$tutor['nome']?></option>
                      <?php endforeach;?>
                    </select>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-md-4">
                  <label for="Curso_idCurso" class="form-label">Curso</label>
                  <div class="input-group has-validation">
                    <select name="Curso_idCurso" id="Curso_idCurso" class="form-control">
                      <option disabled selected>Selecionar curso do aluno</option>
                      <?php foreach ($courses as $course):?>
                      <option value="<?=$course['idCurso']?>"><?=$course['nome']?></option>
                      <?php endforeach;?>
                    </select>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-md-12">
                  <label for="login" class="form-label">Login</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="login" name="login" required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <br>
                <div class="col-12">
                  <button class="btn btn-primary col-12" type="submit">Salvar</button>
                </div>

              </form>





            </div>
            <div class="tab-pane fade" id="nav-curso" role="tabpanel" aria-labelledby="nav-curso-tab">


              <form class="row g-3 needs-validation justify-content-center" novalidate method="post" action="<?=BASE_URL.'cursos/adicionar'?>">

                <legend><br> Curso</legend>
                <div class="col-md-6">
                  <label for="nome_curso" class="form-label">Nome do Curso</label>
                  <input type="text" class="form-control" id="nome_curso" name="nome" placeholder="Nome do Curso"
                    required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="desc_curso" class="form-label">Descrição</label>
                  <input type="text" class="form-control" id="desc_curso" name="descricao"
                    placeholder="Descreva o Curso">
                  
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary col-12" type="submit">Salvar</button>
                </div>
              </form>


            </div>
            <div class="tab-pane fade" id="nav-empresa" role="tabpanel" aria-labelledby="nav-empresa-tab">



              <form class="row g-3 needs-validation" novalidate method="post">

                <legend><br> Empresa</legend>
                <div class="col-md-4">
                  <label for="nome_empresa" class="form-label">Nome Da Empresa</label>
                  <input type="text" class="form-control" id="nome_empresa" name="nome_empresa"
                    placeholder="Nome da Empresa" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="actividade_empresa" class="form-label">Actividade</label>
                  <input type="text" class="form-control" id="actividade_empresa" name="actividade_empresa"
                    placeholder="Actividade da Empresa" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="email_empresa" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="email_empresa" name="email_empresa"
                      aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="contacto_empresa" class="form-label">Phone</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">+244</span>
                    <input type="text" class="form-control" id="contacto_empresa" name="contacto_empresa" required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
              </form>

            </div>
            <div class="tab-pane fade" id="nav-mono" role="tabpanel" aria-labelledby="nav-mono-tab">


              <form class="row g-3 needs-validation" novalidate method="post">

                <legend><br> Monografia</legend>
                <div class="col-md-5">
                  <label for="tema_mono" class="form-label">Tema</label>
                  <input type="text" class="form-control" id="tema_mono" name="tema_mono" placeholder="Tema do trabalho"
                    required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-5">
                  <label for="entrega_mono" class="form-label">Data Postada</label>

                  <input type="date" class="form-control" id="entrega_mono" name="entrega_mono" required>
                  <div class="invalid-feedback">
                    Preencha o Campo

                  </div>
                </div>
                <div class="mb-3">
                  <label for="pdf_mono" class="form-label">Trabalho em PDF</label>
                  <input class="form-control" type="file" id="pdf_mono" multiple required>
                  <div class="invalid-feedback">
                    Preencha o Campo

                  </div>
                </div>  
                  <div class="mb-3">
                    <label for="aluno_mono" class="form-label">Aluno Correspondente</label>
                    <select class="form-control" name="aluno_mono" id="aluno_mono"  required>
                      <option disabled selected>Selecione Aqui</option>    
                      <option value="1">...</option>
                      <option value="2">...</option>
                      <option value="3">...</option>
                    </select>
                    <div class="invalid-feedback">
                      Preencha o Campo
  
                    </div>
                  </div>
                
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="nav-tutor" role="tabpanel" aria-labelledby="nav-tutor-tab">


              <form class="row g-3 needs-validation" novalidate method="post" action="<?=BASE_URL.'tutores/adicionar'?>">

                <legend><br> Tutores</legend>
                <div class="col-md-6">
                  <label for="nome_tutor" class="form-label">Nome do Tutor</label>
                  <input type="text" class="form-control" id="nome_tutor" name="nome"
                    placeholder="Nome do tutor" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="espec_tutor" class="form-label">Especialidade</label>
                  <input type="text" class="form-control" id="espec_tutor" name="especialidade"
                    placeholder="Descreva a especialidade" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-5">
                  <label for="residencia_tutor" class="form-label">Residência</label>
                  <input type="text" class="form-control" id="residencia_tutor" name="endereco" placeholder="Residência"
                    required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="email_tutor" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="email_tutor" name="email" aria-describedby="inputGroupPrepend"
                      required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="contacto_tutor" class="form-label">Telefone</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">+244</span>
                    <input type="text" class="form-control" id="contacto_tutor" name="contacto" required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="login" class="form-label">Login</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="login" name="login" required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary col-12" type="submit">Salvar</button>
                </div>

              </form>
            </div>
            <div class="tab-pane fade" id="nav-estagio" role="tabpanel" aria-labelledby="nav-estagio-tab">

              <form class="row g-3 needs-validation" novalidate method="post">

                <legend><br> Estagios</legend>
                <div class="col-md-4">
                  <label for="Categoria_estagio" class="form-label">Categoria</label>
                  <input type="text" class="form-control" id="Categoria_estagio" name="Categoria_estagio"
                    placeholder="Categoria" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
               <div class="col-md-4">
                  <label for="inicio_estagio" class="form-label">Data de Início</label>

                  <input type="date" class="form-control" id="inicio_estagio" name="inicio_estagio" required>
                  <div class="invalid-feedback">
                    Preencha o Campo

                  </div>
                </div>
                <div class="col-md-4">
                  <label for="final_estagio" class="form-label">Data de Final</label>

                  <input type="date" class="form-control" id="final_estagio" name="final_estagio" required>
                  <div class="invalid-feedback">
                    Preencha o Campo

                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
                </form>
            </div>
            <div class="tab-pane fade" id="nav-superv" role="tabpanel" aria-labelledby="nav-superv-tab">

              <form class="row g-3 needs-validation" novalidate method="post">

                <legend><br> Supervisores</legend>
                <div class="col-md-4">
                  <label for="nome_svisor" class="form-label">Nome do Supervisor do Estágio</label>
                  <input type="text" class="form-control" id="nome_svisor" name="nome_svisor"
                    placeholder="Nome" required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
                <div class="col-md-5">
                  <label for="endereco_svisor" class="form-label">Residência</label>
                  <input type="text" class="form-control" id="endereco_svisor" name="endereco_svisor" placeholder="Residência"
                    required>
                  <div class="invalid-feedback">
                    Preencha o Campo
                  </div>
                </div>
               <div class="col-md-3">
                  <label for="contacto_svisor" class="form-label">Phone</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">+244</span>
                    <input type="text" class="form-control" id="contacto_svisor" name="contacto_svisor" required>
                    <div class="invalid-feedback">
                      Preencha o Campo
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Salvar</button>
                </div>

              </form>



            </div>
          </div>
        </div>
      </div>
    </section>
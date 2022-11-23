
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUser">
  Adicionar motorista
</button>
<br>
<br>
<?=getFlash('message')?>
<!-- Modal -->
<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Formulario para adicionar motorita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?=BASE_URL.'motoristas/adicionar'?>" method="post">
                    <div class="form-group">
                        <label for="nomemotorista">Motorista: </label>
                        <input type="text" name="nomemotorista" id="nomemotorista" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success col-12">Adicionar motorista</button>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th style="width: 600px;">Nome do motorista</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach($motoristas as $motorista):?>
        <tr>
            <td scope="row"><?=$motorista['idMotorista']?></td>
            <td><?=$motorista['nomemotorista']?></td>
            <td>
                <a href="#" class="btn btn-info">Editar</a>
                <a href="<?=BASE_URL.'motoristas/remover/'.$motorista['idMotorista']?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
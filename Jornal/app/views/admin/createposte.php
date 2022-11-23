
<div class="container mt-5">
	<button type="button" class="btn btn-primary mt-3 mb-5" data-toggle="modal" data-target="#modelId">
	  Criar nova postagem
	</button>
	<br>
	<?=getFlash("success")?>
	<?=getFlash("danger")?>
 
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Imagem</th>
				<th>Titulo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php if (count($posts) < 1): ?>
				
				<div class="alert alert-info">
					<strong>Ops!</strong> Nenhuma postagem registrada no sistema ...
				</div>
				
			<?php endif; ?>
			<?php
				foreach ($posts as $post):
			?>
			<tr>
				<td scope="row"><?=$post['id_postagens']?></td>
				<td> <img src="<?=assets($post['imagem'])?>" width="100" alt="<?=$post['titulo']?>"> </td>
				<td><?=$post['titulo']?></td>
				<td> 
					<a href="#" class="btn btn-success mx-1">Editar</a> 
					<a href="<?=URL_BASE?>admin/post/delete/<?=$post['id_postagens']?>" class="btn btn-danger mx-1">Eliminar</a> 
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Formulario para adicionar nova postagem</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body">
					<?=getFlash("success")?>
					<?=getFlash("danger")?>
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Titulo</label>
							<input type="text" name="titulo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>imagem</label>
							<input type="file" name="imagem" class="form-control" required>
						</div>
						<div class="form-group">

							<select class="form-control" name="categoria" required>
								<option disabled selected>Selecionar uma categoria...</option>
								<?php foreach ($categorias as $key => $value):?>
								<option value="<?=$value["id_categoria"]?>"><?=$value["nome"]?></option>
								<?php endforeach;?>
							</select>
						</div>
						<div class="form-group">
							<label>Descrição</label>
							<textarea class="form-control" name="desc" cols="10" rows="5" required></textarea>
						</div>
						<button type="submit" class="btn btn-success col-12">Adicionar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
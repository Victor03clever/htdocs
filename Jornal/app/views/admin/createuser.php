<div class="container">
	<?=getFlash("success")?>
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<form method="POST">
				<div class="form-group">
					<label>Nome</label>z
					<input type="text" name="nome" class="form-control">
				</div>
				<div class="form-group">
					<label>E-mail</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha" class="form-control">
				</div>
				<div class="form-group">
					<input type="checkbox" id="adm" name="adm">
					<label for="adm">Adicionar como administrador</label>
				</div>
				<button type="submit" class="btn btn-success col-12">Cadastrar</button>
			</form>
		</div>		
	</div>
</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<?=getFlash("success")?>
			<?=getFlash("danger")?>
			<form method="POST">
				<div class="form-group">
					<label>Categoria</label>
					<input type="text" name="nome" class="form-control">
				</div>
				<button type="submit" class="btn btn-success col-12">Cadastrar categoria</button>
			</form>
		</div>		
	</div>
</div>
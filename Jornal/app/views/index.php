<?php
require_once dirname(__FILE__). DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR .'header.php';
?>
<!--------------------------------------
HEADER
--------------------------------------->
<div class="container">
	<div class="jumbotron jumbotron-fluid mb-3 pt-0 pb-0 bg-lightblue position-relative">
		<?=getFlash('message')?>
		<div class="pl-4 pr-0 h-100 tofront">
			<div class="row justify-content-between">
				<div class="col-md-6 pt-6 pb-6 align-self-center">
					<h1 class="secondfont mb-3 font-weight-bold">JORNAL ONLINE-IPPA</h1>
					<p class="mb-3">
						Todas as notícias do IPPA encontrarás aqui!
					</p>
					<?php if(!isset($_SESSION[LOGIN])): ?>
						<a href="#" class="btn btn-menu" data-toggle="modal" data-target="#modelId">Cadastrar-se </a>
					<?php endif;?>
				</div>
				<div class="col-md-6 d-none d-md-block pr-0" style="background-size:cover;background-image:url(<?=assets('assets/img/IPPA.jpg')?>);">	</div>
			</div>
		</div>
	</div>
</div>
<!-- End Header -->
    
<!--------------------------------------
MAIN
--------------------------------------->
    
<div class="container pt-4 pb-4">
	<div class="row">

		<?php foreach($postsDestaq['data'] as $key=> $post):?>
		<div class="col-lg-6">
			<div class="card border-0 mb-4 box-shadow h-xl-300">              
                <div style="background-image: url(<?=assets($post['imagem'])?>); height: 150px;    background-size: cover;    background-repeat: no-repeat;"></div>               
				<div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
					<h2 class="h4 font-weight-bold">
					<a class="text-dark" href="<?='/'.APP_NAME.'/postagem/'.$post['id_postagens']?>"><?=$post['titulo']?></a>
					</h2>
					<p class="card-text">
						<?=$post['conteudo']?>
					</p>
					<div>
						<small class="d-block"><a class="text-muted" href="./author.html"><?=$post['usuario']?></a></small>
						<small class="text-muted">Março 22 &middot; 5 min read</small>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		<div class="col-lg-6">
			<div class="flex-md-row mb-4 box-shadow h-xl-300">
				<?php foreach($postsRight['data'] as $key => $post): ?>
					<div class="mb-3 d-flex align-items-center">
						<img height="80" src="<?=assets($post['imagem'])?>">
						<div class="pl-3">
							<h2 class="mb-2 h6 font-weight-bold">
							<a class="text-dark" href="<?='/'.APP_NAME.'/postagem/'.$post['id_postagens']?>"><?=$post['titulo']?></a>
							</h2>
							<div class="card-text text-muted small">
								<?=$post['conteudo']?>
							</div>
							<small class="text-muted">Dec 12 &middot; 5 min read</small>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
    
<div class="container">
	<div class="row justify-content-between">
		<div class="col-md-8">
			<h5 class="font-weight-bold spanborder"><span>Todas as notícias</span></h5>
			<?php foreach ($posts['data'] as $key => $post):?>
			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="<?='/'.APP_NAME.'/postagem/'.$post['id_postagens']?>"><?=$post['titulo']?></a>
					</h2>
					<p>
						<?=$post['conteudo']?>
					</p>
					<div class="card-text text-muted small">
						Autor: <?=$post['usuario']?>
					</div>
					<small class="text-muted"><?=$post['data_post']?></small>
				</div>
				<img height="120" src="<?=assets($post['imagem'])?>">
			</div>
			<?php endforeach;?>
			
			<br><br>
			<nav aria-label="Page navigation">
			  <ul class="pagination">
				<li class="page-item disabled">
				  <a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				  </a>
				</li>
				<?php for($i = 0; $i < $posts['pages']; $i++):?>
					<li class="page-item"><a class="page-link" href="?page=<?=$i+1?>"><?=$i+1?></a></li>
				<?php endfor;?>
				<li class="page-item">
				  <a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				  </a>
				</li>
			  </ul>
			</nav>
		</div>
		<div class="col-md-4 pl-4">

            <h5 class="font-weight-bold spanborder"><span>Destaques</span></h5>
			<ol class="list-featured">
				<li>
				<span>
				<h6 class="font-weight-bold">
				<a href="#" class="text-dark">Pré-Finalistas Sobrecarregados!!</a>
				</h6>
				<p>Alunos da 12ª reclamam sobre a sobrecarga que eles carregam nas últimas semanas!</p>
				</span>
				</li>
				<li>
				<span>
				<h6 class="font-weight-bold">
				<a href="#" class="text-dark">Actividade cultural</a>
				</h6>
				<p>O IPPA realizará uma actividade no dia 08/03 relacionada às 18 províncias de Angola.</p>
				</span>
				</li>
				<li>
				<span>
				<h6 class="font-weight-bold">
				<a href="#" class="text-dark">Não haverá mais professor de matemática?</a>
				</h6>
				<p>Com a possível saída do professor de matemática os alunos perguntam-se como será agora.</p>
				</span>
				</li>
				<li>
				<span>
				<h6 class="font-weight-bold">
				<a href="#" class="text-dark">Férias de uma semana apenas?</a>
				</h6>
				<p class="text-muted">
					Telma Neto
				</p>
				</span>
				</li>
			</ol>
		</div>
	</div>
</div>
   

<!-- Modal -->
<div class="modal fade" id="modalLoginId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Entrar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<form action="<?='/'.APP_NAME.'/usuario/login'?>" method="post">
					<div class="form-group">
						<label for="email">E-mail: </label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="senha">Senha: </label>
						<input type="password" name="senha" id="senha" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-menu col-12">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Formulario de cadastro</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<form action="<?='/'.APP_NAME.'/criarconta'?>" method="post">
					<div class="form-group">
						<label for="nome">Nome: </label>
						<input type="text" name="nome" id="nome" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email">E-mail: </label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="senha">Senha: </label>
						<input type="password" name="senha" id="senha" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-menu col-12">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
require_once dirname(__FILE__). DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
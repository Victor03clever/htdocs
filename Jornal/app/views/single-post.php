<?php
require_once dirname(__FILE__). DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR .'header.php';
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div class="card" style="border-radius: 5px;">
                <img class="card-img-top" src="<?=assets($post['imagem'])?>" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?=$post['titulo']?></h5>
                    <p class="card-text"><?=$post['conteudo']?></p>
                </div>
            </div>
            <span style="color: #ccc;font-weight:600;">Total de comentarios: <?=count($comentarys)?></span>
            <br>

            <?php if (count($comentarys) > 0):?>
            <div class="comentarys" style="
            width: 100%;height: 250px; 
            overflow-y: scroll; border-left: 1px solid #eee; padding-left: 10px;">
                <?php foreach($comentarys as $key => $comentary):?>
                <div class="comentary" style="padding: 10px; border-radius: 5px; border: 1px solid #eee; margin: 10px 0px;">
                    <h5 class="text-indigo font-bold-800"><?=$comentary['nome']?></h5>
                    <p><?=$comentary['conteudo']?></p>
                </div>
                <?php endforeach;?>
            </div>
            <?php endif;?>
            <br>

            <form method="post">
                <label for="comentary">Comentar</label>
                <textarea name="conteudo" id="comentary" cols="30" rows="5" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary mt-3">Comentar</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once dirname(__FILE__). DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'footer.php';
?>
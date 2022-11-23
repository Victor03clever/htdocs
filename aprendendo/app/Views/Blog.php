<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Extrutura MVC</h1>
    <table border="1" cellpadding='5'>
        <thead>
            <td>#</td>
            <td>Nome</td>
            <td>Categoria</td>
            <td>Data de Produção</td>
            <td>Data de Expiração</td>
        </thead>
        <?php foreach ($data['produtos'] as $produto) { # code... ?>
        <tr>
            <td><?php echo $produto['id']?></td>
            <td><?= $produto['nome']?></td>
            <td><?=$produto['categoria']?></td>
            <td><?=$produto['data_producao']?></td>
            <td><?=$produto['data_expiracao']?></td>
        </tr>
        <?php }?> 
    </table>
  
</body>
</html>
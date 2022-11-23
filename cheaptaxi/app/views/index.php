<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola Mundo</title>
    <link rel="stylesheet" href="<?=asset('styles.css')?>">
</head>
<body>
    <br>
    <br>
    <?=getFlash("message")?>
    <br>
    <table>
        <thead>
            <tr>
                <th style="width: 50px;">ID</th>
                <th>Login</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $key => $user):?>
            <tr>
                <td><?=$user['idUsuario']?></td>
                <td><?=$user['login']?></td>
                <td>
                    &nbsp;
                    <a href="<?=BASE_URL.'usuario/editar/'.$user['idUsuario']?>">editar</a> 
                    <a href="<?=BASE_URL.'usuario/remover/'.$user['idUsuario']?>">remover</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
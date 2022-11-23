<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
         if( isset($_SESSION['sms'])){
            echo $_SESSION['sms'];
            unset($_SESSION['sms']);
        }
        if( isset($_SESSION['sms1'])){
            echo $_SESSION['sms1'];
            unset($_SESSION['sms1']);
        }
    ?>
    <form action="form_cad.php" method="post">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Seu email" required>
            </p>
        </fieldset>
        <fieldset>
            <legend>Propriedades</legend>
            <p>
                <label for="nome_pro">Nome da Propriedade:</label>
                <input type="text" name="nome_pro" id="nome_pro" placeholder="propriedade" required>
            </p>
            <p>
                <label for="local_pro">Localidade:</label>
                <input type="text" name="local_pro" id="local_pro" placeholder="Local da propriedade"required>
            </p>
        </fieldset>
        <p>
            <input type="submit" name="cad" value="cadastrar">
            <button type="button"><a href="listar.php">listar</a></button>
        </p>
    </form>
</body>
</html>
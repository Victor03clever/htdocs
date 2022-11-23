<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastramento de mais de um</title>
    <style>
        .form-group{
            
            padding: 15px 15px 0px 0px;
        }
        #form-group{
            padding-bottom:15px ;
        }
        form{
            padding-left: 15px;
        }
        button.cad{
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <form action="processcad.php" method="post">
        <div id="form-group" class="form-group"><label for="nome">Nome: </label><input type="text" name="nome[]" id="nome">
        <label for="email">Email: </label><input type="email" name="email[]" id="email">
        <button type="button" onclick=addform()>+</button>
        </div>
        <button class="cad" name="cad">Cadastrar</button>
    </form>
</body>
<script src="script.js"></script>
</html>
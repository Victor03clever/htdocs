 <?php
session_start();
ob_start();
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
    <a href="index.php" >Listar</a>&nbsp;&nbsp;&nbsp;
    <a href="#" id="logo">c</a>
    <span > </span>
    <a href="form.php">Cadastrar</a>
    </nav>
    <h1 >CRUD - Create</h1>
    <?php
  
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
   
    if (isset($dados['cad'])) {
        $dados = array_map("trim", $dados);
        if (in_array("", $dados)) {
            echo "<p style='color:red'>!!Preencha todos os campos</p>";
        } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red'>!!preencha correctamente o email</p>";
        } else {
            $query = "INSERT INTO campos(nome, email) VALUES('{$dados['nome']}', '{$dados['email']}')";
            $prepare = $conn->prepare($query);
            $prepare->execute();
            if ($prepare->rowCount()) {
                unset($dados);
                $_SESSION['sms'] = "<p style='color:green'>!!Cadastro realizado com sucesso</p>";
                 header("location:index.php");
            } else {
                echo "<p style='color:red'>!!Cadastro nao realizado com sucesso</p>";
            }
            
        }
    }
    ?>
    <form action="" method="POST">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" value="<?php
                                                                                    if (isset($dados['nome'])) {
                                                                                        echo $dados['nome'];
                                                                                    }
                                                                                    ?>"><br>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Seu Email" value="<?php
                                                                                        if (isset($dados['email'])) {
                                                                                            echo $dados['email'];
                                                                                        }
                                                                                        ?>" <?php if (isset($dados['email'])) {echo "autofocus";}?>>
        </p>
        <p>
            <input type="submit" name="cad" value="Cadastrar">
        </p>
    </form>
</body>

</html>
<?php
session_start();
ob_start();
include_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Listar</a>&nbsp; &nbsp;
    <a href="form.php">Cadastrar</a><br>
    <h1>Editar</h1>
    <?php
    //receber o id pela url, metodo get
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    //verificar se id estiver vazio, se sim exiba erro
    if (empty($id)) {
        $_SESSION['sms'] = "<p style='color:red'>!!Erro usuario nao encontrado</p>";
        header("location:index.php");
        
    } else {
        //senao, vai receber os novos dados dos input
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //se clicar no botao actualizar
        if (isset($dados['cad'])) {
            //vai retirar os espacos na variavel dados no inicio e no fim
            $dados = array_map("trim", $dados);
            //se estiver vazio na variavel ou seja nos input, exiba sms preencha todos espacos
            if (in_array("", $dados)) {
                echo "<p style='color:red'>!!Preencha todos os campos</p>";
            } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                //senaose no input email for diferente dos padroes correctos, exiba erro
                echo "<p style='color:red'>!!Erro, edite corretamente o email</p>";
            } else {
                //senao prepara a query para editar
                $query_editar = "UPDATE campos SET nome='{$dados['nome']}',email='{$dados['email']}' WHERE id=$id";
                $prepare = $conn->prepare($query_editar);
                $prepare->execute();
                if (($prepare) and ($prepare->rowCount())) {
                    //se afectar no db, exiba sms sucesso
                    $_SESSION['sms'] = "<p style='color:green'>!!Atualizacao realizado com sucesso</p>";
                    header("location:index.php");
                } else {
                    //senao exiba erro
                    $_SESSION['sms'] = "<p style='color:red'>!!Erro</p>";
                    echo $_SESSION['sms'];
                }
            }
        }
    }
    ?>
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Edite aqui" value="<?php
            //buscar os dados que estao no db antes de serem modificados, para preencher nos input
            $query_limit= "SELECT * FROM campos WHERE id=$id LIMIT 1";
            $prepare1= $conn->prepare($query_limit);
            $prepare1->execute(); 
            if(($prepare1) AND ($prepare1->rowCount())){
                //fazer com que ao clicar no editar apareca com dados existentes
                $dados1= $prepare1->fetch(PDO::FETCH_ASSOC);
                echo $dados1['nome'];
            ?>" autofocus>
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Edite aqui" value="<?php 
            echo $dados1['email'];
            //fazer com que ao clicar no editar apareca com dados existentes
            }
            ?>">
        </p>
        <p>
            <button type="submit" name="cad" value="ir">Actualizar</button>
        </p>
    </form>
</body>

</html>
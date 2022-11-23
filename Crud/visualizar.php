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
    <h1>Visualizar</h1>
    <a href="index.php">Listar</a>&nbsp;&nbsp;&nbsp;
    <a href="form.php">Cadastrar</a><br><br><br>
    <?php 
    //recebendo o id enviados na url, metodo get
    $id= filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    //verificar se id estiver vazio
    if(empty($id)){
        //se estiver exiba sms de erro e redireciona para index.php
        $_SESSION['sms']= "<p style='color:red'>!!Erro arquivo nao encontrado</p>";
        header("location:index.php");
    }else{
        //senao estiver prepara a query
        $query_limit= "SELECT * FROM campos WHERE id=$id LIMIT 1";
        $prepare= $conn->prepare($query_limit);
        $prepare->execute();
        //se a query afectou uma linha no db, imprima os valores
        if(($prepare) AND ($prepare->rowCount())){
            $result= $prepare->fetch(PDO::FETCH_ASSOC);
        echo "ID: {$result['id']}<br>";
        echo "Nome: {$result['nome']}<br>";
        echo "Email: {$result['email']}"."<br><hr>";
        }else{
            //senao exiba sms de erro
            $_SESSION['sms']= "<p style='color:red'>!!Erro arquivo nao encontrado</p>";
            header("location:index.php"); 
        }


    }
    
    ?>
   
</body>
</html>
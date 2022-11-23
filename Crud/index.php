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
    <title>Listar</title>
</head>
<body>
    <a href="index.php">Listar</a>&nbsp;&nbsp;&nbsp;
    <a href="form.php">Cadastrar</a>
    <h1>CRUD-Read</h1>
    <?php 
    /* $metod= getenv("REQUEST_METHOD");
        var_dump($metod);
        if($method=="GET"){
            echo "Nao e permetido o tipo de envio de dados";
        }else{
            ...
        } */
  
    #Selecionando tudo na tabela campos
        $query_select="SELECT * FROM campos";
        $prepare=$conn->prepare($query_select);
        $prepare->execute();      
        if(($prepare) AND ($prepare->rowCount()!=0)){
            if(isset($_SESSION['sms'])){
                echo $_SESSION['sms'];
                unset($_SESSION['sms']);
            }
            #Utilizando o Fetch_Assoc
        // while($res= $prepare->fetch(PDO::FETCH_ASSOC)){
        //     extract($res);
        //     echo "ID $id <br>";
        //     echo "Nome: $nome <br>";
        //     echo "Email: $email <br><hr>";
        // }
       #Utilizando o FetchAll
        $result= $prepare->fetchAll();
        foreach($result as $res){
            extract($res);
            echo "ID $id <br>";
            echo "Nome: $nome <br>";
            echo "Email: $email <br><br>";
            echo "<a href='visualizar.php?id=$id'>Visualizar<br></a>";
            echo "<a href='editar.php?id=$id'>Editar<br></a>";
            echo "<a href='deletar.php?id=$id'>Deletar<br></a><hr>";
            
        }
        } else{echo "<p style='color:red'>!! Nenhum Usuário Encontrado, Porfavor Cadastre um!</p>";}
        #selecionando o total de registros da tabela campos
        $query_count= "SELECT COUNT(id) AS conta FROM campos";
        $count= $conn->prepare($query_count);
        $count->execute();
        $count_result= $count->fetch(PDO::FETCH_ASSOC);
        echo "Total de registros: ".$count_result['conta'];
        
    ?>

</body>
</html>

<?php 
include_once "conect.php";
$dados=filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($dados['cad'])){
    
    foreach ($dados['nome'] as $key => $value) {
        echo $value."<br>";
        echo $dados['email'][$key]."<br><hr>";
        $query_insert="INSERT INTO duas(nome,email) VALUES(:nome,:email)";
        $prepare=$conn->prepare($query_insert);
        $prepare->bindParam(':nome', $value);
        $prepare->bindParam(':email', $dados['email'][$key]);
        $prepare->execute();
       
    }
    if($prepare->rowCount()!=0){
        echo "<a href='index.php'>listar</a><br>";
        echo"cadastramento feito com sucesso!";
    }else{
        header("location:index.php");
    }
}else{
    echo "erro";
}
?>
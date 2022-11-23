<?php

include_once "conect.php";
$dados= filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);
if(isset($dados['edit'])){
foreach ($dados['id'] as $key => $id) {
    echo $key."<br>";
    echo "ID: ".$id."<br>";
    echo "Nome: ".$dados['nome'][$key]."<br>";
    echo "Email: ".$dados['email'][$key]."<br>";
    echo "Nacionalidade: ".$dados['nacio'][$key]."<br><hr>";
    $query_up="UPDATE duas SET nome=:nome, email=:email, nacionalidade=:nacio WHERE id=:id";
    $prepare=$conn->prepare($query_up);
    $prepare->bindParam(':nome',$dados['nome'][$key]);
    $prepare->bindParam(':id',$dados['id'][$key]);
    $prepare->bindParam(':email',$dados['email'][$key]);
    $prepare->bindParam(':nacio',$dados['nacio'][$key]);
    $prepare->execute();
    if(($prepare)AND($prepare->rowCount()!=0)){
        header("location:index.php");

    }else{
        echo "erro verifique a programacao";
    }

}    
   

}else{
    echo "erro!, nao clicou no botao";
}
?>
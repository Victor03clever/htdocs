<?php 
session_start();
ob_start();
include_once "conn.php";
//receber o id enviado na url
$id= filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//se id tiver vazio
if(empty($id)){
    //redireciona para o arquivo index.php com sessao iniciada e sms de erro
    $_SESSION['sms']="<p style='color:red'>!!erro, usuario nao encontrado</p>";
    header("location:index.php");
}else{
    //senao, prepara a query
    $query_deletar= "DELETE FROM campos WHERE id=$id";
    $prepare= $conn->prepare($query_deletar);
    $prepare->execute();
    //se afactou uma linha no banco de dados, exiba sms de sucesso
    if(($prepare)AND($prepare->rowCount())){
    $_SESSION['sms']="<p style='color:green'>Usuario Deletado com sucesso!!</p>";
    header("location:index.php");
    }else{
        //senao afectou entao redireciona para o arquivo index.php com sms de erro
        $_SESSION['sms']="<p style='color:red'>!!erro, usuario nao encontrado</p>";
        header("location:index.php");
    }
}
?>

<?php
session_start();
ob_start();
include_once "conn.php";
$method = getenv("REQUEST_METHOD");
// $_SESSION['sms1']="<p style='color:green;'>!!sucesso</p>";
// $_SESSION['sms']="<p style='color:red;'>!!ERRO, verifique o codigo</p>";

// verificar o metodo enviado se for o post
if ($method == "POST") {
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (isset($dados['cad'])) {
        $query1 = "INSERT INTO dados(nome,email) VALUES('{$dados['nome']}','{$dados['email']}')";
        $prepare1 = $conn->prepare($query1);
        $prepare1->execute();
        $id_dados = $conn->lastInsertId();
        $query2 = "INSERT INTO produtos(nome,localidade,id_dados) VALUES('{$dados['nome_pro']}','{$dados['local_pro']}','$id_dados')";
        $prepare2 = $conn->prepare($query2);
        $prepare2->execute();
        if ($prepare1->rowCount() and $prepare2->rowCount()) {
            $_SESSION['sms1'] = "<p style='color:green;'>!!sucesso</p>";
            header("location:listar.php");
        } else {
            $_SESSION['sms'] = "<p style='color:red;'>!!ERRO, uma tabela nao afectada, verifique db</p>";
            header("location:form.php");
        }
    }
} else {
    $_SESSION['sms'] = "<p style='color:red;'>!!ERRO, metodo nao aceite, usar o metodo POST</p>";
    header("location:form.php");
}

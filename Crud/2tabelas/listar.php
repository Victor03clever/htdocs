<?php
session_start();
ob_start();
include_once "conn.php";
echo "<button><a href='form.php'>Cadastrar</a></button><br><br>";
if (isset($_SESSION['sms'])) {
    echo $_SESSION['sms'];
    unset($_SESSION['sms']);
}
if (isset($_SESSION['sms1'])) {
    echo $_SESSION['sms1'];
    unset($_SESSION['sms1']);
}
$query_select = "SELECT c.nome AS nome1 ,p.nome AS nome2,p.localidade FROM dados AS c JOIN produtos AS p ON c.id=p.id_dados";
$prepare = $conn->prepare($query_select);
$prepare->execute();
if (($prepare) and ($prepare->rowCount())) {
    while ($res = $prepare->fetch(PDO::FETCH_ASSOC)) {
        extract($res);
        echo "Nome do usuario: $nome1 <br>";
        echo "Nome do produto: $nome2 <br>";
        echo "Local: $localidade <br><hr>";
    }
} else {
    echo $_SESSION['sms'] = "<p style='color:red;'>!!ERRO, uma tabela nao afectada, verifique db</p>";
}

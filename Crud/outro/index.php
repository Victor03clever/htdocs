<?php
include_once "conect.php";

$query = "SELECT * FROM duas";
$prepare = $conn->prepare($query);
$prepare->execute();
echo "<a href='cad.php'>Cadastrar</a><br>";
if (($prepare) and ($prepare->rowCount() != 0)) {
    $leitura = $prepare->fetchAll(PDO::FETCH_ASSOC);
    echo "<form method='post' action='editar.php'>";
    foreach ($leitura as $ler) {
        extract($ler);
        echo "<input type='checkbox' name='infor[$id]' value=$id>";
        echo $id . "<br>";
        echo $nome . "<br>";
        echo $email . "<br>";
        echo $nacionalidade . "<br><hr>";
    }
    echo "<input type='submit' value='editar' name='cad'>";
    echo "<input type='submit' value='eliminar' name='el'>";
    echo"</form>";
} else {
    echo "erro";
}

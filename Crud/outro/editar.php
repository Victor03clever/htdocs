<?php
include_once"conect.php";
$dados=filter_input_array(INPUT_POST,FILTER_DEFAULT);

if(isset($dados['cad'])){
    if(!empty($dados['infor'])){
        $junta=implode(",",$dados['infor']);
        $query_select="SELECT * FROM duas WHERE id IN($junta)";
        $prepare= $conn->prepare($query_select);
        $prepare->execute();
        $ler=$prepare->fetchAll(PDO::FETCH_ASSOC);
        echo "<form method='post' action='editado.php'>";
        foreach($ler as $res){
            extract($res);
            echo "ID: <input type='hidden' style='margin:5px;' name='id[]' value='$id'><br>";
            echo "Nome: <input type='text' style='margin:5px;' name='nome[]' value='$nome'><br>";
            echo "Email: <input type='text' style='margin:5px;' name='email[]' value='$email'><br>";
            echo "Nacionalidade: <input type='text' style='margin:5px;' name='nacio[]' value='$nacionalidade'><br><hr>";
        }
        echo "<input type='submit' value=submeter name='edit'>";
        echo "</form>";
    }else{
        echo"erro no usuario";
    }
}elseif(isset($dados['el'])){
    if(!empty($dados['infor'])){
        $junta=implode(",",$dados['infor']);
        $query_delete="DELETE FROM duas WHERE id IN($junta)";
        $prepare=$conn->prepare($query_delete);
        $prepare->execute();
        if($prepare->rowCount()!=0){
            header("location:index.php");
        }else{
            echo "erro! verifique a programacao";
        }

    }else{
        echo"erro no usuario";
    }
}else{
    echo"erro no usuario";
}
?>
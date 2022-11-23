<!doctype html>
<HTML>
<HEAD>
 <TITLE>Questao2 - 21/07</TITLE>
</HEAD>
<BODY>
   <form action="Questao2.php" method="get">Tempo de servico
   <select name="sexo" id="sexo">
      <option value="vazio" disabled selected></option>
      <option value="masculino">masculino</option>
      <option value="femenino">femenino</option>
   </select><br><br>Sexo:
   <input type="number" name="tempo" id="tempo">
   <input type="submit" value="Testar">
   </form>
<?php
 $sexo= $_GET['sexo'];
 $tempo= $_GET['tempo'];
 if($sexo=='femenino'){
    if($tempo>=30){
       Echo "<br>Pode se Aposentar";
    }else{
      Echo "<br>Não Pode se Aposentar";
    }
}else{
   if($tempo>=35){
      Echo "<br>Pode se Aposentar";
   }else{
      Echo "<br>Não Pode se Aposentar";
   }
}
  
?>

</BODY>
</HTML>

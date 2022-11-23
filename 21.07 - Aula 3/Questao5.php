<HTML>
<HEAD>
 <TITLE>Questao5 - 21/07</TITLE>
</HEAD>
<BODY><form action="" method="get">
   <input type="number" name="nota1" id=""><br>
   <input type="number" name="nota2" id=""><br>
   <input type="number" name="nota3" id=""><br>
   <input type="submit" value="validar">
   </form>
<?php  
    $nota1=$_GET['nota1'];
    $nota2=$_GET['nota2'];
    $nota3=$_GET['nota3'];

    $media=$nota1+$nota2+$nota3;
    if (($nota1<=3)or($nota2<=3)or($nota3<=3)){
       $situacao=" reprovado";
    }elseif (($nota1<5)or($nota2<5)or($nota<5)){
       $situacao=" na final";
    }elseif((($nota1<7)or($nota2<7)or($nota3<7))and($media>7)){
       $situacao="aprovado";
    }else{
       $situacao="aprovado por media";
    }
    echo "Voce esta :{$situacao}";
    
?>
</BODY>
</HTML>

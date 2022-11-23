<HTML>
<HEAD>
 <TITLE>Questão1 - 21/07</TITLE>
</HEAD>
<BODY>
<?php
  $nota=array(8,9,5,4,7);
  $length=count($nota);
  foreach ($nota as $key /* => $value */) {
    if($key<7){
      echo $key;
      echo "&nbsp;reprovado<br>";
    }else{
      echo $key;
      echo "&nbsp;aprovado<br>";
    }
  }

  /* for ($i=0;$i<$length;$i++){
    if ($nota[$i]<7){
       echo $nota[$i];
       echo " reprovado<br>";
    }else{
       echo $nota[$i];
       echo " aprovado<br>";
    }
  } */
  ?>
</BODY>
</HTML>

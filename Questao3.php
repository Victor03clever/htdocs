
<?php
      echo"<p> <strong><h2>Exercicio 3</h2></strong></p> ";
      $str="Ja estudei java antes<br>";
      echo $str;
      $tr= explode(" ",$str);
      $php="e php";

      echo $tr[0]. " ". $tr[1].  " ".$tr[2]. " ". $php. " ".$tr[3]."<br>";

      // Exercicio 7
     echo "<p> <strong><h2>Exercicio 7</h2></strong></p> ";
     echo"Na frase “América Latina pode perder 2,4 milhões de empregos” 
     imprimir o tamanho da frase, o número de palavras e o tamanho 
     de cada uma <br><br>";
      $frase= "América Latina pode perder 2,4 milhões para empregos";
      
      
      echo $frase; 
      $tmf=strlen($frase);
      echo"<br><br>O tamanho da anterior frase é: {$tmf}<br><br>";
      $arrayf= explode(" ",$frase);
      $tmpf=count($arrayf);
      echo "O numero de palavras é: {$tmpf}<br><br>";
      $tmp1=strlen($arrayf[0]);
      $tmp2=strlen($arrayf[1]);
      $tmp3=strlen($arrayf[2]);
      $tmp4=strlen($arrayf[3]);
      $tmp5=strlen($arrayf[4]);
      $tmp6=strlen($arrayf[5]);
      $tmp7=strlen($arrayf[6]);
      $tmp8=strlen($arrayf[7]);
      echo $arrayf[0]." possui {$tmp1} letras como tamanho.<br> ".$arrayf[1]." possui {$tmp2} letras como tamanho.<br>"
      .$arrayf[2]." possui {$tmp3} letras como tamanho.<br>".$arrayf[3]." possui {$tmp4} letras como tamanho.<br>"
      .$arrayf[4]." possui {$tmp5} letras como tamanho.<br>".$arrayf[5]." possui {$tmp6} letras como tamanho.<br>"
      .$arrayf[6]." possui {$tmp7} letras como tamanho.<br>".$arrayf[7]." possui {$tmp8} letras como tamanho.<br>";

      // Exercicio 6
      echo"<p> <strong><h2>Exercicio 6</h2></strong></p> ";
      echo"Separar os nomes das pessoas e imprimir um por linha 
      “João,Maria,José,Paulo,Ana”, agora imprimindo-os em ordem
      alfabética<br><br> ";
      echo"João,Maria,José,Paulo,Ana";
      $frase1="João,Maria,José,Paulo,Ana";
      $arr=explode(",",$frase1);
      echo "<br><br>resultado 1<br><br>";
      echo $arr[0]."<br>".$arr[1]."<br>".$arr[2]."<br>".$arr[3]."<br>".$arr[4];
      echo "<br>";
     $lp1=substr($arr[0], 0, 1);
     $lp2=substr($arr[1], 0, 1);
     $lp3=substr($arr[2], 0, 1);
     $lp4=substr($arr[3], 0, 1);
     $lp5=substr($arr[4], 0, 1);
     $arr1=explode($lp1, $arr[0]);
     echo $arr1[0];
     var_dump($arr1);
     





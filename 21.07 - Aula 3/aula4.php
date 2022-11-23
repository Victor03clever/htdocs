<?php 
function multiplica ($a,$b,$c)
{
    $retorno= $a*$b*$c;
    return $retorno;
    
}
echo multiplica(2,3,1)."<br>";
function potencia($base, $expoente){
    $potencia= pow($base,$expoente);
    return $potencia;
}
echo  potencia(3,2);

echo Date("h:m:s");
?>

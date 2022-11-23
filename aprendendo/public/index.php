<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autoload</title>

</head>
<body>
    <?php

use Core\ConfigController as mainclass ;


    require'../vendor/autoload.php';
    $class= new mainclass  ;
    $class->carregar();
    
   
    
    ?>
    
</body>

</html>
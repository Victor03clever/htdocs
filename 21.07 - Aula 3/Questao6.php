<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="1" width="500px"  >
    <?php for ($i=0;$i<8;$i++){ ?>
  <tr >
    <td height="50" bgcolor="<?php
                   if ($i%2==0){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
    <td height="50"  bgcolor="<?php
                   if ($i%2==1){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
    <td  height="50" bgcolor="<?php
                   if ($i%2==0){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
    <td  height="50" bgcolor="<?php
                   if ($i%2==1){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
    <td height="50"  bgcolor="<?php
                   if ($i%2==0){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
    <td  height="50" bgcolor="<?php
                   if ($i%2==1){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
    <td height="50"  bgcolor="<?php
                   if ($i%2==0){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
    <td  height="50" bgcolor="<?php
                   if ($i%2==1){
                      echo "#000000";
                   }else{
                      echo "#FFFFFF";
                   }?>">
    </td>
  </tr>
  <?php } ?>
       
    </table>
    </center>
</body>
</html>
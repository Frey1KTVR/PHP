<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Functions";

echo " Calculate";
$num1=7;
$num2=15;
$sum=$num1+$num2;
echo "<br>".$num1."+".$num2."=".$sum;
echo "<hr>";
///-------------function
include("function.php");
$summa=calculation(25,48,"+");
echo "<br>".'25'.'+'.'48'.'='.$summa;
//----
$num1=30;
$num2=0;
$action="/";
$summa=calculation($num1,$num2,$action);
if($num2==0 && ($action=="/" || $action=="%") ){
    echo "<br>".$num2.$action.$num1."=".$summa;
}
else {
    echo "<br>".$num1.$action.$num2."=".$summa;
}


?>

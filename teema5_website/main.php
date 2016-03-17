<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$countries=array("Home","Estonia","Russia","Norway","China","Germany");
$flags=array("world.png","eesti.png","russia.png","norway.png","china.png","germany.png");
$content=array('home.txt','estonia.txt','russia.txt','','','');
include("controller/navigation.php");// function of inviting third-party file


?>


<div style="width:200px; float:left; min-height:500px;">
    <h1>MENU</h1>
    <?php
    echo menu($countries);
    ?>
</div>
<div style="width:900px;">
    <h2>Countries flags</h2>
    <?php
    $bmark=$_GET['bmark'];//reading from URL string "bmark" to $bmark
    if(isset($bmark)){
        if(file_exists('content/'.$content[$bmark]) && $content[$bmark]!=""){
            include("content/".$content[$bmark]);
        }
        
        
        if(file_exists("images/".$flags[$bmark])){
            
            echo '<img src="images/'.$flags[$bmark].'" border=1>';
        
        }
        else{
            echo '<br>NO FILE';
        }
        
        
    }
    else{
       
        include("content/".$content[0]);
        echo '<img src="images/'.$flags[0].'" border=1>';
    }
    ?>
</div>
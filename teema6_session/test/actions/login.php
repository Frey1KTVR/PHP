<?php

session_start();
if($_POST["log"]!="" && $_POST["pas"]!=""){
    $login=$_POST["log"];
    $password=$_POST["pas"];
    if($login=='admin' && $password=='123'){
        $_SESSION['rank']='admin';
        echo "OK";
    }
    else if($login==$_SESSION['nameU'] && $password==$_SESSION['passU']){
        $_SESSION['rank']='user';
        echo "OK";
    }
    else{
         echo "invalid";        
    }
}
else{
        if(!($_POST["log"])){
            echo "no login";
        }
        else if(!($_POST["pas"])){
            echo "no password";
        }
}
?>
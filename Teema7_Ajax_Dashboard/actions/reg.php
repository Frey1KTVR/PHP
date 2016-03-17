<?php
session_start();

$user=$_POST['login'];
$pass=$_POST['password'];
$passN=$_POST['passwordN'];
if($user!=""&&$pass!="" && $pass==$passN){
    echo 'ok';
    $_SESSION['rankU']=$user;
    $_SESSION['passU']=$pass;
    
}else{
    if($user=='') echo 'no login';
        elseif ($pass=="") echo 'no pass'; 
        elseif($pass!=$passN) echo 'vale';
        
   
}
?>
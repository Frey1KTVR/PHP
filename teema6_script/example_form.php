<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!$_POST['send']){
echo'<h2>Registration</h2>';
echo'<form method="POST">
    <br>Username: <input type="text" name="user" value="" placeholder="username" />
    <br>Password: <input type="password" name="pass" value="" placeholder="password" />
    <br>Password(repeat): <input type="password" name="pass_r" value="" placeholder="repeat password" />
    <br><input type="submit" value="Send data" name="send" />
</form>';
//----------------------обработка
}
if($_POST['send']){
    $user=$_POST['user'];//username
    $pass=$_POST['pass'];
    $pass_r=$_POST['pass_r'];
    if($user!="" && $pass!="" && $pass_r==$pass){
        echo'<br> User '.$user.' have registrated succesfuly';
        echo'<br>Your password: '.$pass;
    }
    else{
        echo'<br>Error';
    }
    echo'<br><a href="'.$_SERVER['PHP_SELF'].'">BACK</a>';
    
}

?>


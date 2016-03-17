<?php
session_start();
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['passwordN'])){
        $user=$_POST['login'];
        $pass=$_POST['password'];
        $pass_r=$_POST['passwordN'];
            if($user!="" && $pass!="" && $pass==$pass_r){
                echo 'OK';
                $_SESSION['rankU']=$user;
                $_SESSION['rankP']=$pass;
                
            }else{
                if($user=="") echo 'no login';
                else if($pass=="") echo 'no password';
                else if($pass!=$pass_r)echo 'passwords do not match';
            }
    }

?>
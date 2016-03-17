<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) 
    {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    if($login == "admin" && $password == "123")
    {
        $_SESSION['rank'] = "admin";
        echo 'ok';
    }
    elseif($login == $_SESSION['rankU'] && $password == $_SESSION['passU']) 
    {
        $_SESSION['rank'] = $login;
        echo 'ok';
}
 else 
     {
    if(!$login)
        echo "no login";
        elseif (!$password)
            echo "no pass";
        else 
            echo "vale";
    }    
 }
?>

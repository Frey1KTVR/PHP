<?php
session_start();
if (isset($_SESSION["rank"]) && $_SESSION["rank"] == "admin") {
    header("Location: dashboard.php");
} elseif (isset($_SESSION["rankU"]) && $_SESSION["rank"] == $_SESSION["rankU"]) {
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>

        <link href="css/login.css" rel="stylesheet">
    </head>

    <body>

        <div style="padding-left:200px;">

            <!-----------  Для вывода ошибок  -------------->
            <div id="login_result"></div>
            <form  id="form1">	   
                <h3 >Введите ваши данные</h3>
                <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
                <p><input type="password" name="password"  placeholder="Пароль" ></p>
                <p><button  type="submit">Войти</button> <a href="register.php" id="reg">Регистрация пользователя </a></p>		
            </form>

            <!-----------Всё хорошо, регистрация прошла успешно  -------------->
            <div id="reg_result"></div>        
            <!-----Чтобы поставить ссылку --------->
            <!--<div id="site"></div>-->     

        </div> 

        <script src="js/jquery.min.js"></script>  <!-- ЭТОТ скрипт обязательно!          --> 

        <script type="text/javascript">
            $("#form1").submit(function() {
                $.ajax({
                    type: "POST",
                    url: "actions/login.php", //обращаемся к "actions/reg.php"для оброботки данных,введённых в форму!!!!!!!!!!!!!!
                    data: $("#form1").serialize(),
                    success: function (data)
                    {//обработка
                        if (data === 'ok')                        
                        {                            
                            location.reload();
                        }
                    }
                });
                return false;
            });
        </script>


    </body>
</html>
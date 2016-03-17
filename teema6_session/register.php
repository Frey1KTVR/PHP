<?php
//session_start();

?>﻿
<!--&& isset($_SESSION['rankP'])-->

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Регистрация пользователя</title>

    
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>

    <div style="padding-left:200px;">
        <div id="login_result">
            
        </div>
        <div id="smile"></div>
	<!-----------  !!!!!!!!!!!  -------------->
	  
      <form  id="formN" method="POST">	   
        <h3 >Регистрация пользователя</h3>
        <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
        <p><input type="password" name="password"  placeholder="Пароль" ></p>
        <p><input type="password" name="passwordN"  placeholder="Пароль еще раз" ></p>	
        <p><button  type="submit">Регистрация</button></p>
		
      </form>
        <div id="site">
        <?php
//hyperlink, if session is set and page reloaded
        if(isset($_SESSION['rankU']) && isset($_SESSION['rankP'])){
            echo '<a href="#">Web page</a>';
            
        }
        
        ?>
        </div>     
        <div id="reg_result"></div>
      
        
    </div> 

	<!-----------  !!!!!!!!!!!  -------------->
	

    <script src="js/jquery.min.js"></script>  <!-- ЭТОТ скрипт обязательно!          -->
 
  
    <script type="text/javascript">
	$("#formN").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/reg.php", //!!!!!!!!!!!!!!
           data: $("#formN").serialize(),
           success: function(data)
           {
			 //обработка
		if(data==="OK"){
                    $("#reg_result").html("User "+formN.login.value+" registrated succesfuly!");
                    $("#login_result").html("");
                    formN.login.value=formN.password.value=formN.passwordN.value="";
                 
                    $("#site").html('<a href="#">Web page</a>');
                    //$("form").html("");
                  
                    //------------------------------
                    
               
                }
                else if(data==="no login"){
                    $("#login_result").html('No login name');
                    $("#reg_result").html("");
                 //   $("#smile").html('<img src="images/sad.jpg" width="100" height="100">');
                }
                else if(data==="no password"){
                    $("#login_result").html('No password');
                    $("#reg_result").html("");
                    formN.password.value=formN.passwordN.value="";
                 
                }
                else if(data==="passwords do not match"){
                    $("#login_result").html('Cant match passwords');
                    $("#reg_result").html("");
                    formN.password.value=formN.passwordN.value="";
                 
                }
			 
           }
         });
		return false;
	});
	</script>
        <script type="text/javascript">
            $("#site").click(function(){
               
                document.location.href="dashboard.php";
                
            });
        </script>

  </body>
</html>

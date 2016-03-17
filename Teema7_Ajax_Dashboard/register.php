<?php
session_start();
?>
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
        <div></div>
	
	<!-----------  Для вывода ошибок  -------------->
        <div id="login_result"></div>
        
      <form  id="form1">	   
        <h3>Регистрация пользователя</h3>
        <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
        <p><input type="password" name="password"  placeholder="Пароль" ></p>
        <p><input type="password" name="passwordN"  placeholder="Пароль еще раз" ></p>        
	<p><button  type="submit">Регистрация</button> <a href="admin.php" id="reg">Sign in</a></p>	
      </form>
        <!-----------Всё хорошо, регистрация прошла успешно  -------------->
        <div id="reg_result"></div>
        
         <!-----Чтобы поставить ссылку --------->
        <div id="site">              
      
       </div>     
    </div> 	

    <script src="js/jquery.min.js"></script>  <!-- ЭТОТ скрипт обязательно!          --> 
  
    <script type="text/javascript">
	$("#form1").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/reg.php", //!!!!!!!!!!!!!!
           data: $("#form1").serialize(),
           success: function(data)
           {//обработка
               if(data==='ok'){
                   $("#reg_result").html('Пользователь '+form1.login.value +' зарегистрирован!');
                
               //Чистим объект
                   $("#login_result").html('');
                   //Чистим все элементы формы
                   form1.login.value=form1.password.value=form1.passwordN.value="";
                   //Чтобы скрыть саму форму
                   
                   //Ссылка на страницу куда вернуться
                   //1 variant -- обновление страницы $_SERVER['PHP_SELF']
                  // $("#site").html('<a href="#" >Sign in</a>');
                   
         }
		else if(data==='no login'){
                    $("#login_result").html('No user name!');                   
        
                }
		else if(data==='no pass'){
                    $("#login_result").html('No pass!');                    
                    form1.password.value=form1.passwordN.value="";
                   
                }
                else if(data==='invalid'){
                    $("#login_result").html('No match!');
                    form1.password.value=form1.passwordN.value="";
                    
                }
			 
           }
         });
		return false;
	});
	</script>
        <script type="text/javascript">
        
        $("#site").click   //click-щёлкнуть
        (function(){            
            document.location.href="dashboard.php";//перезагрузить куда,ставим ссылку           
        }
        );
        </script>

  </body>
</html>
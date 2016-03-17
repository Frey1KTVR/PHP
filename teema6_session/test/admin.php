

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
	  
      <form  id="formA" method="POST">	   
        <h3 >Авторизация</h3>
        <input type="text" name="log"   placeholder="Имя" autofocus >
        <p><input type="password" name="pas"  placeholder="Пароль" ></p>
        	
        <p><button  type="submit">Войти</button></p>
		
      </form>
             
        
      
        <div><p><a href="register.php">Зарегистрируйтесь!</a></p></div>
    </div> 

	<!-----------  !!!!!!!!!!!  -------------->
	

    <script src="js/jquery.min.js"></script>  <!-- ЭТОТ скрипт обязательно!          -->
 
  
    <script type="text/javascript">
	$("#formA").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/login.php", //!!!!!!!!!!!!!!
           data: $("#formA").serialize(),
           success: function(data)
           {
			 //обработка
		if(data==="OK"){
                    
                    $("#login_result").html("");
                    
                 

                    //$("form").html("");
                    document.location.href="dashboard.php";
                    //formA.log.value=formA.pas.value="";
                    //header('Location: ../dashboard.php');
                    //------------------------------
                    
               
                }
                else if(data==="no login"){
                    $("#login_result").html('No login name entered');
                    
                 //   $("#smile").html('<img src="images/sad.jpg" width="100" height="100">');
                }
                else if(data==="no password"){
                    $("#login_result").html('No password entered');
                    
                    
                 
                }
                else if(data==="invalid"){
                    $("#login_result").html("Invalid login or password. Try again or register");
                    formA.log.value=formA.pas.value="";
                }
                else{
                    $("#login_result").html('');
                }
                
			 
           }
         });
		return false;
	});
	</script>
<!--        <script type="text/javascript">
            $("#site").click(function(){
               
                document.location.href="dashboard.php";
                
            });
        </script>-->

  </body>
</html>



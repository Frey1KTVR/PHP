<?php

session_start();
if($_SESSION['rank']=='admin'){
    echo '<img src="images/nirvana.jpg">';
}
else if((!isset($_SESSION['nameU']) && !isset($_SESSION['nameP'])) ){
    header('Location:admin.php');
}
else{
    echo '<img src="images/sad.jpg">';
}

?>
<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset="utf-8">
    
    <title>WEBSITE</title>
    
</head>
<body>
    <div style="width:400px;padding:100px;">
        <?php
        echo '<p>Hello: '.$_SESSION['rank'].' <a href="#" id="logout"> Logout</a></p>';
        echo '<p> Username: '.$_SESSION['nameU'].'</p>';
        echo '<p> Password: '.$_SESSION['passU'].'</p>';
        
        ?>
    </div>
    <div id="adm"></div>
        <script src="js/jquery.min.js"></script> 
        <!-- ЭТОТ скрипт обязательно!-->
        <script type="text/javascript">
          
        
            $("#logout").click(function(){
            document.location.href="actions/logout.php";
        });
        
        </script>
</body>
</html>
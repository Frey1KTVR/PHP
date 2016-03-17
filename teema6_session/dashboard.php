<?php

session_start();
if(!isset($_SESSION['rankU']) && !isset($_SESSION['rankP'])){
    
    header('Location:dashboard.php');
    
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
        echo '<p>Hello: '.$_SESSION['rankU'].' <a href="#" id="logout">Logout</a></p>';
        echo '<p> Username: '.$_SESSION['rankU'].'</p>';
        echo '<p> Password: '.$_SESSION['rankP'].'</p>';
        
        ?>
    </div>
        <script src="js/jquery.min.js"></script>  <!-- ЭТОТ скрипт обязательно!-->
        <script type="text/javascript">
            $("#logout").click(function(){
            document.location.href="actions/logout.php";
        });
        
        </script>
</body>
</html>
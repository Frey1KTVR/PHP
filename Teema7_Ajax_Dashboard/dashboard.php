<?php
session_start();
if (!isset($_SESSION['rank'])) {
   header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Образование</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	
  </head>

  <body>
<?php
//yldosa---------------------------------
//work massive!)
$top=array("Новости","Контакт","Коментарии");//menyy admin
$top_u=array("Камни","Контакт");//menyy user
$tekst=array('primer.html','kontakt.php','comment.php');//files
$link_id=array('news','contact','comment');//id admin
$link_id_u=array('stone','contact');//id user
include('nav_bar.php');//fail of the function is 'included'

//---------------------------------------------
?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" id="title" href="#">Образование</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
		    <?php
			//menyy
                  
            if ($_SESSION['rank'] == "admin") {
                echo meny($top, $link_id);
            }
            else {
             echo meny($top_u, $link_id_u);
            }
			?>
        <?php
            echo '<li><a href="#" id="logout" style="margin-left: 500px;"> Hello: ' . $_SESSION['rank'] . '| Logout</a> </li>';
            if ($_SESSION['rank'] == "admin") {
                echo '<img src="images/admin.png" width=50px>';
            }
            else {
             echo'<img src="images/user.png" width=50px>';
	}
	?> 

			
          </ul>
		  
		  </div>
		 
      </div>
	  
    </nav>
 <!--start main -->
    <div class="container" id="main">
<?php

    include'content/esileht.php';

?>
 
    </div>
	<!--end main -->

    <script src="js/jquery.min.js"></script>

   <script type="text/javascript">
	$( "#title" ).click(function() {
		$( "#main" ).load( "content/esileht.php");
	});
	</script>
	
	
	<script type="text/javascript">
	//content
        <?php
        if($_SESSION['rank']!="admin"){
            $link_id=$link_id_u;
        }
	for($i=0;$i<count($link_id);$i++)
        {
        ?>
        $( "#<?php echo $link_id[$i];?>" ).click(function() {
		$( "#main" ).load( "content/<?php echo $tekst[$i];?>");
	});
        <?php
        }
        ?>
	</script>
	
	
    <script type="text/javascript">
        $("#logout").click(function () {
            document.location.href = "actions/logout.php";
        });
    </script>
  </body>
</html>

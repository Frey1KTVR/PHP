<?php
$story=array("Египет","Греция","Рим","Кельты");
$theme=array("theme1","theme2","theme3","theme4");
$picture=array("pic1","pic2","pic3","pic4");
include("function/constructor.php");
?>

<h1>Interesting history facts</h1>
<div >
    
    <h2 >Choose your story about ancient times</h2>
     <?php
    
    $textmenu = menu($story,$theme,1);
    echo $textmenu;
    
    ?>
    <link href="css/global.css"; type="text/css";>
</div>

<div style="margin:30px 1200px; min-width:200px;">
    
    <h2 >Choose your story theme picture</h2>
     <?php
    
    $textmenu = menu($story,$picture,0);
    echo $textmenu;
    
    ?>
    
</div>
<!--<div style="width:900px;">
    
    <?php
    $bmark=$_GET['bmark'];//reading from URL string "bmark" to $bmark
    if(isset($bmark)){
        if(file_exists('content/'.$content[$bmark]) && $content[$bmark]!=""){
            include("content/".$content[$bmark]);
        }
        
        
        if(file_exists("images/".$flags[$bmark])){
            
            echo '<img src="images/'.$flags[$bmark].'" border=1>';
        
        }
        else{
            echo '<br>NO FILE';
        }
        
        
    }
    else{
       
        include("content/".$content[0]);
        echo '<img src="images/'.$flags[0].'" border=1>';
    }
    ?>
</div>-->







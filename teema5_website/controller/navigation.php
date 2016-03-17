<?php

/* 
 function for MENU construction
 * need massive
 * giving string from massive
 */

function menu($massive){
    $text="<ul>";
    $k=0;
    foreach($massive as $var){
        if($k==0){
            $text.='<li><a href="'.$_SERVER['PHP_SELF'].'">'.$var.'</a></li>';
        }
        else{
        $text.='<li><a href="'.$_SERVER['PHP_SELF'].'?bmark='.$k.'">'.$var.'</a></li>';
        }
        $k++;
        
    }
    
    $text.="</ul>";
    return $text;
}



?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function menu($massive,$lname,$num){
    
    $text='<ul>';
    
    $k=0;
    if($num==1){
    foreach($massive as $var){
        if($k==0){
            $text.='<li  style="display:inline-block; padding:10px 30px;"><a href="'.$_SERVER['PHP_SELF'].'">'.$var.'</a></li>';
        }
        else{
        $text.='<li  style="display:inline-block; padding:10px 30px;"><a href="'.$_SERVER['PHP_SELF'].'?'.$lname.'='.$k.'">'.$var.'</a></li>';
        }
        $k++;
        
    }
    }
    else{
        foreach($massive as $var){
        if($k==0){
            $text.='<li><a href="'.$_SERVER['PHP_SELF'].'">'.$var.'</a></li>';
        }
        else{
        $text.='<li><a href="'.$_SERVER['PHP_SELF'].'?'.$lname.'='.$k.'">'.$var.'</a></li>';
        }
        $k++;
        
    }
    }
    
    $text.="</ul>";
    return $text;
}

?>
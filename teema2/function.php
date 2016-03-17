<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * $n1,$n2- meaning
 * $action- actions (+-* / % )
 */

function calculation($n1,$n2,$action){
    if($action=="+"){
        $rezult=$n1+$n2;
    }
    elseif ($action=="-"){
        $rezult=$n1-$n2;
    }
    elseif ($action=="/"){
        if ($n2==0){
        echo "cant do this action with '0'";
        $met=$n2;
        $n2=$n1;
        $n1=$met;
        }
        elseif($n2==0 and $n1==0){
            echo "cant use this function variators are both '0' ";
        }
        $rezult=$n1/$n2;
    }
    elseif ($action=="*"){
        $rezult=$n1*$n2;
    }
    elseif ($action=="%"){
        if ($n2==0){
        $met=$n2;
        $n2=$n1;
        $n1=$met;
        }
        elseif($n2==0 and $n1==0){
            echo "cant use this function variators are both '0' ";
        }
    $rezult=$n1%$n2;
    }
    return $rezult;
}

?>
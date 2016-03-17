<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Arvuti!</title>
 </head>
 <body>

  <form id="data" action="arvuti_pood.php" method="POST" >
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$begunok=0;
$mas1=['Компьютер','Планшет','Ноутбук','Как желаете получить?','Послать заказ'];
$mas2=[comp,plant,noteb];
echo '<h1>Arvuti pood</h1>';
$table='<table>';
$table.='<tr style="background-color:black; color:white; font-weight:bold">';
    for ($z = 0; $z < 2; $z++) {
    if($z==0){
        $table.= '<td>
           Товар
        </td>';
    }
    else{
        $table.= '<td>
           Количество
        </td>';
    }
    }
$table.='</tr>';

for ($i = 0; $i < 5; $i++) {
    $table.= '<tr>';
    
    for ($j = 0; $j < 2; $j++) {
        if($j==0){
            $table.= '<td>'.$mas1[$i].'</td>';
        }
        else{
            if($i==4){
                $table.='<td><input type="submit" value="Send" name="send2" /></td>';
            }
            elseif($i==3){
                $table.='<td><select name="vqbor" form="data">
                        <option value="sam">Заберу сам</option>
                        <option value="cool">Куллер</option>
                        <option value="smart">Smart почта</option>
                        </select></td>';
            }
            else{
            $table.= '<td><input type="text" name="'.$mas2[$i].'"  /></td>';
            }
        }
        }
    $table.='</tr>';
    }

$table.= '</table>';

echo $table;
echo '--------------------------------------------------------------------------'

?>
</form>
     <div>
         <?php
         
         if (_POST["send2"]){
             echo '<h2>Заказ</h2>'.'<br><br>';
             $comp=(int)(_POST[$mas2[0]]);
             $plant=(_POST[$mas2[1]]);
             $note=(_POST[$mas2[2]]);
             $vqbor=(_POST["vqbor"]);
             echo 'Компьютер:'.$comp;
         }
         
         ?>
     </div>
 </body>
</html>
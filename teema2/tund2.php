<h1>cicle FOR</h1>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
for ($i = 0; $i < 10; $i++) {
    echo$i . "<br>";
}
for ($i = 65; $i < 91; $i++) {
    echo chr($i) . " ";
}
?>
<h1>Table</h1>
<?php
echo'<table border="1">';
for ($i = 0; $i < 3; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 7; $j++) {
        echo '<td>
           &nbsp;x&nbsp
    </td>';
    }
    echo'</tr>';
}
echo '</table>';
echo'<hr>';

$table = '';

$table.='<table border="1">';

$table.='<tr style="background-color:black; color:white">';
    for ($z = 0; $z < 3; $z++) {
    $table.= '<td ">
           &nbsp;Y&nbsp
        </td>';
    }
$table.='</tr>';

for ($i = 0; $i < 10; $i++) {
   
    if (($i+1)%2==0){
       $table.=  '<tr style="background-color:grey">';
    }else{
     $table.= '<tr>';
    }
    for ($j = 0; $j < 3; $j++) {
        $table.= '<td>
           &nbsp;x&nbsp
        </td>';
    }
    $table.='</tr>';
}

$table.= '</table>';

echo $table;
?>
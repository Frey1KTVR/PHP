<?php
//однострочный коммент
/*многострочный коммент
 
 * 
 *  */

echo '<p>Hello, World!</p>';

?>
<!--  HTML comment         -->
<h1>Primer</h1>
<?php
echo'<br>Lastname-Ivanov'.'<br>firstname-Ivan';
echo'<p style="color:red;">Text example</p>';
?>
<h1>Peremennaja</h1>
<?php
$n1=10;
$n2=15;
$sum=$n1+$n2;
echo 'Primer: '.$n1.'+'.$n2.'='.$sum;
echo "<br>Primer: $n1+$n2=$sum";
?>
<?php
$name="Ivan";
echo "<br>My name is ".$name;
$name=1990;
$name=2016-$name;
echo '<br>Age -'.$name;
?>
<hr>
<h1>Function isset</h1>
<?php
$myvar=10;
$MyVar=100;
if(isset($MyVar))
{
    echo"Variator $MyVar - opredelena";
}
else{
    echo"Peremennaja $MyVar - ne opredelena";
}
?>

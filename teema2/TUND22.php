<H1>MASSIVE</H1>
<?php

$countries=array('Eesti','Russia','Deutch','France','Norway');
echo '<br>Array count: '.count($countries);
echo '<br>'.$countries[1].'<hr>';
//-----------------------------------------------Variant1 1: for
for($i=0;$i<count($countries);$i++){
    echo'<br>'.$countries[$i];
}
//-----------------------------------------------Variant 2: foreach
$text="";
foreach($countries as $country){
    $text.='<li>'.$country.'</li>';
}
$text='<url>'.$text.'</ul>';
echo '<hr>'.$text;
?>
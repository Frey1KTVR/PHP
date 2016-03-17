<?php
//функция меню
//$mass1- name of the menu option
//$mass2- ID of menu option
function meny($mass1,$mass2){
        $text='';
        $k=0;
  foreach($mass1 as $element){
      
      
      $text.='<li><a href="#" id="'.$mass2[$k].'">'.$element.' </a></li>';
      $k++;
      
  }
return $text;
}
?>

<?php
//Разрушение сессиии
session_start();
//Уничтожение переменных
session_destroy();
unset($_SESSION['rank']);
unset($_SESSION['rankU']);
unset($_SESSION['passU']);

header('Location:../admin.php');// ../поднятся на уровень вверх(в папку-action)
?>
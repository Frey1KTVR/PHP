<?php

//Session destruction and back to registration form.
session_start();
unset($_SESSION['rankU']);
unset($_SESSION['rankP']);
session_destroy();
header('Location: ../register.php');


?>
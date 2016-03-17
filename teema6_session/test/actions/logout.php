<?php

//Session destruction and back to registration form.
session_start();
unset($_SESSION['rank']);
unset($_SESSION['nameU']);
unset($_SESSION['passU']);
session_destroy();
header('Location: ../admin.php');


?>
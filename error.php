<?php

$error = $_SERVER['REDIRECT_STATUS'];
echo "The error is " .$error;
if ($error == 404) {
    header('location: 404page.html');
}



?>
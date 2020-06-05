<?php

include './external_autoload.php';

\user\User::logout();
header('Location: index.php');

?>
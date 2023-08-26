<?php
session_start();


session_unset();
session_destroy();


if (isset($_COOKIE['session_token'])) {
    setcookie('session_token', '', time() - 3600, '/');
}


header("Location: index.php");
exit();
?>
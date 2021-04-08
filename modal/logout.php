<?php
session_start();
unset($_SESSION["isAuthenticated"]);
unset($_SESSION["password"]);
header("Location: ../index.php");
?>
<?php
session_start();
$_SESSION['user']="goresh";
// destroy a session
unset($_SESSION['user']);


?>
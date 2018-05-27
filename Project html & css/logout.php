<?php
session_start();
$_SESSION = array();
session_destroy();

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'log.html';
header("Location: http://$host$uri/$extra");
exit;

<?php 
session_start(); 
$_SESSION['s_username'] = null;
$_SESSION['s_firstname'] = null;
$_SESSION['s_lastname'] = null;

header("Location: index.php");

?>
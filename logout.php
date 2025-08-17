<?php
require_once 'frontend/header.php';
require_once 'frontend/auth.php';

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: login.php");
exit();
?>
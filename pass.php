<?php
include_once 'db.php';
session_start();
$_SESSION['name'] = $_GET['name'];
include 'view.php';
?>

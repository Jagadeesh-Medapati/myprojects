<?php
ob_start();
session_start();
session_destroy();
include('connection.php');
header('location: index.php');
?>
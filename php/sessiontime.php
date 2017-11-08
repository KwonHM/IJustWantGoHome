<?php 
session_start();
$hour = $_POST['hour'];
$min = $_POST['min'];

$_SESSION['user_hour'] = $hour;
$_SESSION['user_min'] = $min;

echo $hour.'시'.$min.'분';
?>
<?php 
session_start();
if(!isset($_SESSION['tramage'])){$_SESSION['tramage']=0;}
$_SESSION['tramage']=$_SESSION['tramage']+1;

header('Location: tramage.php')
?>
<?php 
session_start();
if(!isset($_SESSION['net'])){$_SESSION['net']=0;}
$_SESSION['net']=$_SESSION['net']+1;

header('Location: net.php')
?>
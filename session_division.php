<?php 
session_start();
if(!isset($_SESSION['division'])){$_SESSION['division']=0;}
$_SESSION['division']=$_SESSION['division']+1;

header('Location: division.php');
?>
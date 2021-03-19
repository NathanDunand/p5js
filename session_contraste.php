<?php 
session_start();
if(!isset($_SESSION['contraste'])){$_SESSION['contraste']=0;}
$_SESSION['contraste']=$_SESSION['contraste']+1;

header('Location: contraste.php')
?>
<?php 
session_start();
if(!isset($_SESSION['8bits'])){$_SESSION['8bits']=0;}
$_SESSION['8bits']=$_SESSION['8bits']+1;

header('Location: 8bits.php')
?>
<?php 
session_start();
if(!isset($_SESSION['16bits'])){$_SESSION['16bits']=0;}
$_SESSION['16bits']=$_SESSION['16bits']+1;

header('Location: 16bits.php')
?>
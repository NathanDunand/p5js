<?php 
session_start();
if(!isset($_SESSION['bw'])){$_SESSION['bw']=0;}
$_SESSION['bw']=$_SESSION['bw']+1;

header('Location: bw.php')
?>
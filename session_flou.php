<?php 
session_start();
if(!isset($_SESSION['flou'])){$_SESSION['flou']=0;}
$_SESSION['flou']=$_SESSION['flou']+1;

header('Location: flou.php')
?>
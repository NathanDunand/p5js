<?php 
session_start();
if(!isset($_SESSION['filtre1'])){$_SESSION['filtre1']=0;}
$_SESSION['filtre1']=$_SESSION['filtre1']+1;

header('Location: filtre1.php');
?>
<?php session_start();include 'doctype.php';


$_SESSION['bw']=0;
$_SESSION['filtre1']=0;//réinitialise les variables session des autres filtres
$_SESSION['8bits']=0;
$_SESSION['16bits']=0;
$_SESSION['net']=0;
$_SESSION['contraste']=0;
$_SESSION['tramage']=0;



if (!isset($_SESSION['flou'])){$_SESSION['flou']=0;}
if ($_SESSION['flou']%2!=0){echo '<script type="text/javascript" src="nonflou.js"></script>';}
else {echo '<script type="text/javascript" src="flou.js"></script>';}
?>
<script type="text/javascript" src="flou.js"></script>
</head>
<body>
	<?php include 'header.php';
	include 'p5.html';?>
	<div class="fluid-container">
		<div class="row">
			<div class="col-12"><h1>Filtre de flou</h1></div>
			<div class="col-10"></div>
			<div class="col-2">
				<?php include 'aide.php' ?>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<?php if ($_SESSION['flou']%2!=0){echo '<a class="btn btn-danger" href="session_flou.php">Appliquer le flou</a>';} 
				else {echo '<a class="btn btn-danger" href="session_flou.php">Désactiver le flou</a>';}?>
			</div>
		</div>
	</div>
</body>
</html>
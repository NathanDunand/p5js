<?php session_start();include 'doctype.php';


$_SESSION['bw']=0;
$_SESSION['filtre1']=0;//réinitialise les variables session des autres filtres
$_SESSION['16bits']=0;
$_SESSION['net']=0;
$_SESSION['contraste']=0;
$_SESSION['tramage']=0;
$_SESSION['flou']=0;

if (!isset($_SESSION['division'])){$_SESSION['division']=0;}
if ($_SESSION['division']%2!=0){echo '<script type="text/javascript" src="nondivision.js"></script>';}
else {echo '<script type="text/javascript" src="test4.js"></script>';}
?>
</head>
<body>
	<?php include 'header.php';
	include 'p5.html';?>
	<div class="fluid-container">
		<div class="row">
			<div class="col-12"><h1>Filtre de flou divisionnaire</h1></div>
			<div class="col-10"></div>
			<div class="col-2">
				<?php include 'aide.php' ?>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<?php if ($_SESSION['division']%2!=0){echo '<a class="btn btn-danger" href="session_division.php">Appliquer le filtre de flou divisionnaire</a>';} 
				else {echo '<a class="btn btn-danger" href="session_division.php">Désactiver le filtre de flou divisionnaire</a>';}?>
			</div>
		</div>
	</div>
</body>
</html>
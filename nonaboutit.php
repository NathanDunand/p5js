<?php session_start();include 'doctype.php';


$_SESSION['bw']=0;
$_SESSION['filtre1']=0;//réinitialise les variables session des autres filtres
$_SESSION['8bits']=0;
$_SESSION['net']=0;
$_SESSION['contraste']=0;
$_SESSION['tramage']=0;
$_SESSION['flou']=0;

if (!isset($_SESSION['16bits'])){$_SESSION['16bits']=0;}
if ($_SESSION['16bits']%2!=0){echo '<script type="text/javascript" src="non16bits.js"></script>';}
else {echo '<script type="text/javascript" src="testmargot.js"></script>';}
?>
</head>
<body>
	<?php include 'header.php';
	include 'p5.html';?>
	<div class="fluid-container">
		<div class="row">
			<div class="col-12"><h1>Cadre de la couleur moyenne de l'image</h1></div>
			<div class="col-10"></div>
			<div class="col-2">
				<?php include 'aide.php' ?>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<?php if ($_SESSION['16bits']%2!=0){echo '<a class="btn btn-danger" href="session_16bits.php">Appliquer le filtre 16 bits</a>';} 
				else {echo '<a class="btn disabled btn-danger" href="session_16bits.php">Désactiver le filtre non aboutit</a>';}?>
			</div>
		</div>
		<div class="row">
			<div class="col-6"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Arboretum_-_%27Land_unter%27_nach_Gewittersturm_2012-07-03_17-31-49_%28P7000%29.JPG/330px-Arboretum_-_%27Land_unter%27_nach_Gewittersturm_2012-07-03_17-31-49_%28P7000%29.JPG"></div>
			<div class="col-6"></div>
		</div>
	</div>
</body>
</html>
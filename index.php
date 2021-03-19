<?php
session_start();
session_destroy();
include 'doctype.php';

?>

</head>
<body>
	<?php include 'header.php';?>
	<div class="fluid-container">
		<div class="row">
			<div class="col-12"><h1>Bienvenue sur le Photoshop en ligne !</h1></div>
			<div class="col-10"></div>
			<div class="col-2">
				<?php include 'aide.php' ?>
			</div>
		</div>
		<div class="row">
			<div class="col-6"><p>Vous avez une barre de menu qui vous permet de tester les différents filtres que nous avons créé. Au clic sur l'un de ces filtres vous pourrez en constater le résultat. Vous pourrez ensuite l'activer et le désactiver à volonté en cliquant sur le bouton rouge.</p></div>
		</div>
	</div>
</body>
</html>
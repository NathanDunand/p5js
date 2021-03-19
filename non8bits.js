
	let img; // Déclaration de la variable 'img'.

	function preload() {
	img = loadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Signac_-_Portrait_de_F%C3%A9lix_F%C3%A9n%C3%A9on.jpg/601px-Signac_-_Portrait_de_F%C3%A9lix_F%C3%A9n%C3%A9on.jpg'); // Charger l'image
}

function setup() {
	let c = createCanvas(img.width, img.height);  // Créer le canvas avec les dimensions de l'image
	image(img, 0, 0); // Afficher l'image (sur le coin haut-gauche)

	loadPixels(); // obligatoire avant la modification des pixels

	const n = pixelDensity() * 4 * width * height * 2 ; // nombre d'éléments dans le tableau
	for (let i = 0; i < n; i += 4) {

	pixels[i]   = pixels[i];  // canal rouge
	pixels[i] = pixels[i];  // canal vert
	pixels[i] = pixels[i];  // canal bleu
}
	updatePixels(); // obligatoire après la modification des pixels

	//saveCanvas(c, 'exo2', 'png');
	} // sauvegarder l'image comme exo2.png
let input_img, output_img;

    function preload() {
      input_img = loadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Signac_-_Portrait_de_F%C3%A9lix_F%C3%A9n%C3%A9on.jpg/601px-Signac_-_Portrait_de_F%C3%A9lix_F%C3%A9n%C3%A9on.jpg'); // Charger l'image
    }

    function setup() {
      let c = createCanvas(input_img.width, input_img.height);  // Créer le canvas avec les dimensions de l'image
      output_img = createImage(input_img.width, input_img.height);

      input_img.loadPixels();
      output_img.loadPixels();
      const d = pixelDensity();
      for (let y = 0; y < d*height; y++) {
        for (let x = 0; x < d*width; x++) {
          // remplir ici
          var k=3;
          let centre=copier_pixel(x, y);
          let haut=copier_pixel(x, y-k);
          let droite=copier_pixel(x+k, y);
          let bas=copier_pixel(x, y+k);
          let gauche=copier_pixel(x-k, y);
          let r=5*centre[0]-haut[0]-droite[0]-bas[0]-gauche[0];
          let g=5*centre[1]-haut[1]-droite[1]-bas[1]-gauche[1];
          let b=5*centre[2]-haut[2]-droite[2]-bas[2]-gauche[2];
          ecrire_pixel(x, y, r, g, b);
        }
      }
      output_img.updatePixels(); // obligatoire après la modification des pixels

      image(output_img, 0, 0);

    }

    /* Renvoie un tableau avec les valeurs du pixel (x,y) */
    function copier_pixel(x, y) {
      const i = 4 * (y * width + x);
      return [
        input_img.pixels[i], 
        input_img.pixels[i+1], 
        input_img.pixels[i+2], 
        input_img.pixels[i+3]
      ];
    }

    /* Modifie les valeurs du pixel (x,y) */
    function ecrire_pixel(x, y, r, g, b, a = 255) {
      const i = 4 * (y * width + x);
      r = b;
      g = r;
      b = g;
      output_img.pixels[i]   = r;
      output_img.pixels[i+1] = g;
      output_img.pixels[i+2] = b;
      output_img.pixels[i+3] = a;
    }
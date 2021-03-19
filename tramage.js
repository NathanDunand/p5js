let img;

    function preload() {
      img = loadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Signac_-_Portrait_de_F%C3%A9lix_F%C3%A9n%C3%A9on.jpg/601px-Signac_-_Portrait_de_F%C3%A9lix_F%C3%A9n%C3%A9on.jpg');
      // img = loadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/The_Color_Run%2C_Grand_Prix_Edition_%28Melbourne_2014%29_%2812869502993%29.jpg/640px-The_Color_Run%2C_Grand_Prix_Edition_%28Melbourne_2014%29_%2812869502993%29.jpg');
      // img = loadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/PlanckianLocus.png/533px-PlanckianLocus.png');
    }

    function setup() {
      let c = createCanvas(img.width, img.height);

      img.loadPixels(); // obligatoire avant la modification des pixels
      const n = 4 * (pixelDensity() * width) * (pixelDensity() * height); // nombre d'éléments dans le tableau
      for (let i = 0; i < n; i += 4) {
        img.pixels[i+0] = binariser_aleatoire(img.pixels[i+0]);
        img.pixels[i+1] = binariser_aleatoire(img.pixels[i+1]);
        img.pixels[i+2] = binariser_aleatoire(img.pixels[i+2]);
        img.pixels[i+3] = 255;
      }
      img.updatePixels(); // obligatoire après la modification des pixels

      image(img, 0, 0);


    }

    // renvoyer 0 ou 255 avec une probabilité qui dépend de r
    function binariser_aleatoire(x) {
  let r = random(0 , 7);
let y;
  if (r < 3 || x < 150){
   y = 0;
  }
  else {
   y = 255;
  }
return y;
    }
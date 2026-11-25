/*Fonction 1 : */

function calculerSurface (longueur,largeur) {
    return longueur * largeur;
}

let Surface = calculerSurface (20,40);

console.log("La surface est : " + Surface);

/*Fonction 2 : */

function estGrand(surface) {
    return surface >= 100
}

let resultat = estGrand(150);

if (resultat) {
    console.log("La surface est grande");
} else {
    console.log("La surface est petite");
}

/*Fonction 3 : */

function trouverMaximum(a,b) {
    if (a > b) {
        return a;
    }
    return b;
}

let Maximum = trouverMaximum(10,20);
console.log("le maximum est : " + Maximum)
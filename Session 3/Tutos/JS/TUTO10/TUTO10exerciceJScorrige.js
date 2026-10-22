const prompt = require ("prompt-sync") ();

let notes = [];
let taille = Number(prompt("Entrer la taille de tableaux :"));
let somme = 0;
let compteur = 0;

for (let j = 0 ; j < taille ; j++) {
    notes[j] = Number(prompt("Entrer la note "+(j+1)+" :"));
    if (notes[j]>=14) {
        compteur++
    }
    somme = somme + notes[j];
}

console.log("Les notes sont :", notes);
console.log("la moyenne generale est :", (somme / taille));
console.log("Les notes superieure a 14 sont:", compteur);
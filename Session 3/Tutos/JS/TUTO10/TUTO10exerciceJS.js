const prompt = require ("prompt-sync") ();

let notes = [];
let taille = 5;
let somme = 0;

for (let i = 0 ; i < taille ; i++) {
    let note = Number(prompt("Entrer la note : "));
    notes [i] = note;
    somme = somme + note;
}

let moyenne = somme / taille;

console.log("Les notes sont :", notes);

console.log("la moyenne generale est :", moyenne)

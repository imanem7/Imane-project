//exercice 1 : //

let mots = ["chat", "ordinateur", "table", "programmation", "tv"];
let motsLongs = 0;

for (let j = 0; j < mots.length; j++) {
    console.log("Le mot :",mots[j],"contient =>",mots[j].length,"lettres");
    if (mots[j].length >= 4) {
        motsLongs++
    }

}
console.log("le nombre des mots longs", motsLongs);

let motsT = [];
let compteur = 0;
for (let i = 0; i < mots.length; i++) {
    if (mots[i][0]==="t") {
        motsT[compteur]=mots[i];
        compteur++;
    }
}
console.log("les mots qui commence par la lettre T :", motsT);

//exercice 2 ://

let nombres = [4, 7, 2, 9, 5, 8];
let sommePairs = 0;

for (let a = 0; a < nombres.length; a++) {
    if (nombres[a] % 2 === 0) {
        sommePairs=sommePairs+nombres[a]
    }
}

console.log("La somme des nombres pairs :", sommePairs)
let panier = [15, 42, 5, 89, 12, 50, 8];
let sommetotale = 0;
let articlechers = 0;
let sommechers = 0;

for (let i = 0; i < panier.length; i++) {

    sommetotale = sommetotale + panier[i];
    
    if (panier[i] >= 20) {
        articlechers++;

    sommechers = sommechers + panier[i];

    }

}

console.log("La somme totale des articles de panier :", sommetotale);
console.log("Le nombre des articles chers :", articlechers);
console.log("La somme totale des articles chers :", sommechers);

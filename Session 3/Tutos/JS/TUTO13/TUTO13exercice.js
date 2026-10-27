let produits = ["Clavier", "Souris", "Écran", "Casque"];
let prix = [150, 80, 1200, 250];
let stocks = [10, 0, 5, 3];

let ValeurTotal = 0;
let prixMax = prix[0];
let produitCher = produits[0];

for (let i = 0; i < produits.length; i++) {

    console.log(produits[i], "=>", prix[i], "dhs =>", stocks[i], "en stock");

    if (stocks[i] === 0) {
        console.log("ce produit est en repture de stock :", produits[i]);
    }

    ValeurTotal = ValeurTotal + (prix[i] * stocks[i]);

    if (prix[i] > prixMax) {
        prixMax = prix[i];
        produitCher = produits[i]; 
    }

    if (stocks[i] < 5) {
        console.log("Produit avec un stock inférieur à 5 :", produits[i]);
    }
}

console.log("La valeur Total du stock est de :", ValeurTotal, "dhs");
console.log("le nom du produit le plus cher est :", produitCher);

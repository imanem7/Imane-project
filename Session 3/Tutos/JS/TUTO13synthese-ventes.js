let ventes = [110, 75, 150, 180, 90, 130, 100, 160];

let nombreVentes = 0;
let chiffreAffaires = 0;

let maximum = ventes[0];
let minimum = ventes[0];

let ventesExceptionnelles = 0;
let chiffreExceptionnel = 0;

for (let i = 0; i < ventes.length; i++) {
    let vente = ventes[i];
        
    nombreVentes++;
    chiffreAffaires = chiffreAffaires + vente;

    if (vente > maximum) {
        maximum = vente;
    }

    if (vente < minimum) {
        minimum = vente;
    }

    if (vente >= 130) {
        ventesExceptionnelles++;
        chiffreExceptionnel = chiffreExceptionnel + vente;
    }
}

console.log("Nombre total de ventes :", nombreVentes);
console.log("Chiffre d'affaires total :", chiffreAffaires);
console.log("Vente maximum :", maximum);
console.log("Vente minimum :", minimum);
console.log("Nombre de ventes exceptionnelles :", ventesExceptionnelles);
console.log("Chiffre d'affaires des ventes exceptionnelles :", chiffreExceptionnel);
function calculerMoyenne(notes) {
    let somme = 0;
    for (let i = 0 ; i < notes.length ; i++) {
        somme += notes[i];
    }

    return somme / notes.length;
}

let groupe1 = [12, 14, 16, 17, 15];
let groupe2 = [13, 20, 18, 10, 11];

console.log("La moyenne generale de groupe 1 est : " + calculerMoyenne(groupe1));
console.log("La moyenne generale de groupe 2 est : " + calculerMoyenne(groupe2));
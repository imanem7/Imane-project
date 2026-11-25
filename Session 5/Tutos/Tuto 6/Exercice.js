function salut(nom){
    console.log("Bonjour, "+nom);
}

salut("Imane");

function max(a,b){
    let maximum = a;
    if (b>a){
        maximum = b;
    }

    console.log("le maximum est : "+maximum);
}

max(10,20);
max(50,5);
max(9,9);

function base_donnée(nom,prenom,age,formation){
    console.log("Nom : "+nom);
    console.log("Prénom : "+prenom);
    console.log("Age : "+age);
    console.log("Formation : "+formation);
}

base_donnée("Imane","El Mouden",26,"Développement web");

function moyenne(a,b,c){
    let moyenne = (a+b+c)/3;
    console.log("La moyenne de la class est : "+moyenne);
}

moyenne(10,20,18);
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

function base(nom,prenom,age,formation){
    console.log("Nom : "+nom);
    console.log("Prénom : "+prenom);
    console.log("Age : "+age);
    console.log("Formation : "+formation);
}

base("Imane","El Mouden",26,"Développement web");
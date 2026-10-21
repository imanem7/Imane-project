
# Résultat attendu : Modèle conceptuel de données d’un restaurant

```text
CLIENT
------
#code_client
nom_client
prenom_client
telephone_client
email_client

       (1,n)
CLIENT -------- PASSER -------- COMMANDE
                        (1,1)   

COMMANDE
--------
#code_commande
date_commande
heure_commande
statut_commande

          (1,n)  
COMMANDE --------    CONTENIR        ------------------------------ REPAS
                  quantite_commandee               (0,n)
                  prix_unitaire_commande

REPAS
-----
#code_repas
nom_repas
description_repas
categorie_repas
prix_repas
```

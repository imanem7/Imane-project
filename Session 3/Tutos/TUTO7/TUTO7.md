
# Résultat attendu : Modéliser une liaison complexe

Voici les 4 entités finalisées du système de e-commerce. Remarquez la présence de l’entité de liaison **`LIGNE_COMMANDE`** avec son identifiant composé, ainsi que l’emplacement de la quantité.

```text
CLIENT
------
id_client
nom_client

COMMANDE
--------
id_commande
date_commande
id_client

PRODUIT
-------
id_produit
nom_produit

LIGNE_COMMANDE
---------------
id_commande, id_produit
quantite_commandee
```

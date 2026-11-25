# Modèle Logique de Données du Restaurant :

## 1. Table CATEGORIE

- `id_categorie` (PK)
- `nom_categorie`

## 2. Table REPAS_CATEGORIE

- `id_rapas` (PK, FK)
- `id_categorie` (PK, FK)

## 3. Table REPAS

- `id_rapas` (PK)
- `nom_repas`
- `discription_repas`
- `prix_repas`

## 4. Table REPAS_COMMANDE

- `id_rapas` (PK, FK)
- `id_commande` (PK, FK)

## 5. Table COMMANDE

- `id_commande` (PK)
- `date_commande`
- `heure_commande`
- `statut_commande`
- `id_client` (FK)

## 6. Table CLIENT

- `id_client` (PK)
- `nom_client`
- `prénom_client`
- `email_client`
- `téléphone_client`
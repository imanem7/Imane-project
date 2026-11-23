# Transformation des relations en clés étrangères

## 1. Table VILLE

- `id_ville` (PK)
- `nom_ville`

## 2. Table AUTEUR

- `id_auteur` (PK)
- `nom_auteur`
- `prenom_auteur`
- `email_auteur`
- `id_ville` (FK)

## 3. Table CATEGORIE

- `id_categorie` (PK)
- `nom_categorie`

## 4. Table ARTICLE

- `id_article` (PK)
- `titre_article`
- `contenu_article`
- `date_publication`
- `statut_article`
- `image_article`
- `id_auteur` (FK)
- `id_categorie` (FK)

## Conclusion

Les trois relations 1–N du MCD ont été transformées en clés étrangères (FK).

- La table AUTEUR reçoit `id_ville` provenant de VILLE.
- La table ARTICLE reçoit `id_auteur` provenant de AUTEUR.
- La table ARTICLE reçoit `id_categorie` provenant de CATEGORIE.
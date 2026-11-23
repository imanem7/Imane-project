# Modèle Logique de Données (MLD) complet du Blog

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

## 4. Table TAG

- `id_tag` (PK)
- `nom_tag`

## 5. Table ARTICLE

- `id_article` (PK)
- `titre_article`
- `contenu_article`
- `date_publication`
- `statut_article`
- `image_article`
- `id_auteur` (FK)
- `id_categorie` (FK)

## 6. Table ARTICLE_TAG

- `id_article` (PK, FK)
- `id_tag` (PK, FK)

## Conclusion

Le MLD complet du Blog comporte 6 tables relationnelles.

Les trois règles de transformation du MCD vers le MLD ont été appliquées :

1. Entité → Table avec une clé primaire (PK).
2. Relation 1–N → Clé étrangère (FK).
3. Relation N–N → Table de liaison avec une clé primaire composée (PK, FK).
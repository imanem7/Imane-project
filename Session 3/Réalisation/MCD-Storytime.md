# MCD — Projet Storytime

## 1. Présentation du projet

**Storytime** est une plateforme qui permet de découvrir des films, des séries, des livres et des podcasts, ainsi que de partager et d'explorer des réflexions autour des histoires, des idées et des émotions que ces œuvres nous inspirent.

La page d'accueil présente également une sélection d'œuvres mises en avant, avec leur titre, leur description, leur image et leur type.

## 2. Dictionnaire des données

### Entité : CATÉGORIE

| N° | Code donnée | Désignation | Type | Exemple |
|---|---|---|---|---|
| 1 | Code_categorie | Identifiant de la catégorie | Entier | 1 |
| 2 | Nom_categorie | Nom de la catégorie | Texte | Films & séries |
| 3 | Description_categorie | Description de la catégorie | Texte | Des histoires à regarder, à vivre et à partager |
| 4 | Icone_categorie | Icône représentant la catégorie | Texte | fa-film |

### Entité : ŒUVRE

| N° | Code donnée | Désignation | Type | Exemple |
|---|---|---|---|---|
| 1 | Code_oeuvre | Identifiant de l'œuvre | Entier | 1 |
| 2 | Titre_oeuvre | Titre de l'œuvre | Texte | Past Lives |
| 3 | Description_oeuvre | Description de l'œuvre | Texte | Une histoire sur les rencontres et les souvenirs |
| 4 | Image_oeuvre | Image représentant l'œuvre | Texte | past-lives.jpg |
| 5 | Type_oeuvre | Type de l'œuvre | Texte | Film |

## 3. Les associations

### Association : CONTENIR

Cette association relie les catégories aux œuvres.

- Une catégorie peut contenir aucune ou plusieurs œuvres.
- Une œuvre appartient à une seule catégorie.

**Cardinalités :**

- CATÉGORIE : (0,n)
- ŒUVRE : (1,1)

## 4. MCD — Schéma conceptuel de données

```text
┌──────────────────────┐
│      CATÉGORIE       │
├──────────────────────┤
│ # Code_categorie     │
│   Nom_categorie      │
│   Description        │
│   Icone_categorie    │
└──────────────────────┘
           │
         (0,n)
           │
       CONTENIR
           │
         (1,1)
           │
┌──────────────────────┐
│        ŒUVRE         │
├──────────────────────┤
│ # Code_oeuvre        │
│   Titre_oeuvre       │
│   Description_oeuvre │
│   Image_oeuvre       │
│   Type_oeuvre        │
└──────────────────────┘
```

**Remarque :** Le symbole `#` désigne l'identifiant de l'entité.

## 5. Exemples de données présentes sur la page

### Catégories

- Films & séries
- Livres
- Podcasts
- Réflexions

### Œuvres mises en avant

| Titre | Type |
|---|---|
| Everything Everywhere All at Once | Film |
| The Midnight Library | Livre |
| Past Lives | Film |

## 6. Remarque sur le périmètre du MCD

Ce MCD représente les données visibles dans la page d'accueil actuelle de Storytime.

Les éléments purement visuels, comme le logo, les liens de navigation, les titres de présentation et les icônes sociales, ne sont pas considérés comme des entités métier.

Les fonctionnalités qui ne sont pas encore présentes dans le HTML, comme la création de comptes, les avis, les notes et les commentaires, ne sont pas intégrées à ce MCD.
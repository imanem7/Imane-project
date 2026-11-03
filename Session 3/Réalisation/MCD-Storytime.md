# MCD — Page d'accueil Storytime

## Entités

**CATÉGORIE**
- # Code_categorie
- Nom_categorie
- Description_categorie
- Icone_categorie

**ŒUVRE**
- # Code_oeuvre
- Titre_oeuvre
- Description_oeuvre
- Image_oeuvre

## Association

**APPARTENIR**

- Une catégorie peut regrouper zéro ou plusieurs œuvres : (0,n).
- Une œuvre appartient à une seule catégorie : (1,1).

## Schéma MCD

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
       APPARTENIR
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
└──────────────────────┘
```
# Entités et relations — Blog

## Entités identifiées

### VILLE

- **id_ville**
- nom_ville

### AUTEUR

- **id_auteur**
- nom_auteur
- prenom_auteur
- email_auteur

### ARTICLE

- **id_article**
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

## Relations et cardinalités

| **Entité A** | **Cardinalité A** | **Verbe** | **Cardinalité B** | **Entité B** |
| :----------- | :---------------: | :-------- | :---------------: | :----------- |
| VILLE        |        0,N        | habite    |        1,1        | AUTEUR       |
| AUTEUR       |        0,N        | rédige    |        1,1        | ARTICLE      |
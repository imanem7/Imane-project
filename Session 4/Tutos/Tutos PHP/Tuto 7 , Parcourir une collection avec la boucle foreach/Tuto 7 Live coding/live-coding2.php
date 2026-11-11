<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="live-coding-style.css">
</head>
<body>
    <?php
$articles = [
    ['id' => '1', 'titre' => 'Premier article', 'auteur' => 'Amine'],
    ['id' => '2','titre' => 'Deuxième article', 'auteur' => 'Ali'],
    ['id' => '3','titre' => 'Troisième article', 'auteur' => 'Omar'],
    ['id' => '4','titre' => 'Quatrième article', 'auteur' => 'Amina']
    ];
    ?>
<ul>
    <?php
    foreach ($articles as $article) {
        echo '<li class="style-li">' . $article ['id'] . " " . $article['titre'] . " " . $article['auteur'] . '</li>' ;
    }
    ?>
</ul>
</body>
</html>
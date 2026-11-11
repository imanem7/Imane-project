<?php
$articles = [
    ['id' => '1', 'titre' => 'Premier article', 'auteur' => 'Amine'],
    ['id' => '2','titre' => 'Deuxième article', 'auteur' => 'Ali'],
    ['id' => '3','titre' => 'Troisième article', 'auteur' => 'Omar'],
    ['id' => '4','titre' => 'Quatrième article', 'auteur' => 'Amina']
];
echo '<ul>';
foreach ($articles as $article) {
    echo '<li>' . $article['id'] ." ". $article['titre'] ." ". $article['auteur'] . '</li>';
}
echo '</ul>';
?>

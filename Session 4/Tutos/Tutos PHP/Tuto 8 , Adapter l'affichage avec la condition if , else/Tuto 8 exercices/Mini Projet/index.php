<?php

$taches = [
    [
        'id' => 1,
        'titre' => 'Créer la structure HTML',
        'description' => 'Réaliser la structure HTML de la page d\'accueil.',
        'priorite' => 'Haute',
        'date_limite' => '2026-11-15',
        'terminee' => true
    ],
    [
        'id' => 2,
        'titre' => 'Intégrer les styles CSS',
        'description' => 'Appliquer les couleurs et les espacements.',
        'priorite' => 'Moyenne',
        'date_limite' => '2026-11-17',
        'terminee' => false
    ],
    [
        'id' => 3,
        'titre' => 'Créer les fonctions PHP',
        'description' => 'Organiser les traitements de la Todo List.',
        'priorite' => 'Haute',
        'date_limite' => '2026-11-10',
        'terminee' => true
    ],
    [
        'id' => 4,
        'titre' => 'Tester l\'application',
        'description' => 'Verifier le bon fonctionnement et corriger les erreurs.',
        'priorite' => 'Basse',
        'date_limite' => '2026-11-20',
        'terminee' => false
    ],
    [
        'id' => 5,
        'titre' => 'Préparer la collection des tâches',
        'description' => 'Créer un tableau multidimensionnel avec 8 tâches.',
        'priorite' => 'Moyenne',
        'date_limite' => '2026-11-12',
        'terminee' => true
    ],
    [
        'id' => 6,
        'titre' => 'Afficher les statistiques',
        'description' => 'Calculer et afficher le total, les tâches terminées et non terminées.',
        'priorite' => 'Haute',
        'date_limite' => '2026-11-21',
        'terminee' => false
    ],
    [
        'id' => 7,
        'titre' => 'Organiser les fichiers du projet',
        'description' => 'Créer un dossier pour le projet et y placer les fichiers (index.php, style.css).',
        'priorite' => 'Basse',
        'date_limite' => '2026-11-22',
        'terminee' => false
    ],
    [
        'id' => 8,
        'titre' => 'Vérifier l\'affichage des tâches',
        'description' => 'Tester tous les cas (terminée et non terminée) et corriger le style.',
        'priorite' => 'Moyenne',
        'date_limite' => '2026-11-24',
        'terminee' => false
    ]
];

$total = count($taches);

$terminees = 0;

foreach ($taches as $tache) {
    if ($tache['terminee'] == true) {
        $terminees++;
    }
}

$nonTerminees = $total - $terminees;


require 'TodoListe.php';

?> 
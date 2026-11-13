<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To do list</title>
</head>

<body>

    <header>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect width="8" height="4" x="8" y="2" rx="1"/>
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
            <path d="m9 14 2 2 4-4"/>
        </svg>
        <div class="header-titre">
            <h1>Ma Todo List</h1>
            <span>Gérez et suivez vos tâches quotidiennes</span>
        </div>
    </header>

    <main>

        <section class="taches-situation">
            <div class="taches">
                <div class="taches-total">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m12 2 10 5-10 5L2 7l10-5Z"/>
                        <path d="m2 12 10 5 10-5"/>
                        <path d="m2 17 10 5 10-5"/>
                    </svg>
                    <div class="taches-detail">
                        <p>Total</p>
                        <h3>
                            <?= $total ?>
                        </h3>
                        <span>tâches</span>
                    </div>
                </div>
            </div>

            <div class="taches">
                <div class="taches-terminees">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                    <div class="taches-detail">
                        <p>Terminées</p>
                        <h3>
                            <?= $terminees ?>
                        </h3>
                        <span>tâches</span>
                    </div>
                </div>
            </div>  

            <div class="taches">
                <div class="taches-nonterminees">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    <div class="taches-detail">
                        <p>Non terminées</p>
                        <h3>
                            <?= $nonTerminees ?>
                        </h3>
                        <span>tâches</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="titre-taches">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 6h13"/>
                <path d="M8 12h13"/>
                <path d="M8 18h13"/>
                <path d="M3 6h.01"/>
                <path d="M3 12h.01"/>
                <path d="M3 18h.01"/>
            </svg>
            <h2>Liste des tâches</h2>
        </section>

        <section class="les-taches">
            <?php foreach ($taches as $tache): ?>
            <ul>
                <li class="les-taches-detail <?php if ($tache['terminee'] == 'true'): ?>vert<?php endif; ?>">

                        <div class="les-taches-detail-titre">
                            <h3>
                                <?= htmlspecialchars($tache['titre']) ?>
                            </h3>

                            <span>
                                <?= htmlspecialchars($tache['description']) ?>
                            </span>
                        </div>

                        <p class="les-taches-detail-priorite <?php if ($tache['priorite'] == 'Moyenne'): ?>bleu<?php elseif ($tache['priorite'] == 'Haute'): ?>rouge<?php else: ?>vert<?php endif; ?>"> 
                            <?= htmlspecialchars($tache['priorite']) ?>
                        </p>

                    <div class="les-taches-detail-date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="4" rx="2"/>
                            <path d="M16 2v4"/>
                            <path d="M8 2v4"/>
                            <path d="M3 10h18"/>
                        </svg>
                    
                        <span>
                            <?= date('d/m/Y', strtotime($tache['date_limite'])) ?>
                        </span>
            </div>
                </li>
            </ul>
            <?php endforeach; ?>
        </section>

    </main>

</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>

<body>
    <header>
        <p class="logo">Mon♡Portfolio</p>
        <div class="nav-bar">
            <a href="#">Accueil</a>
            <a href="#">Projets</a>
            <a href="#">Contact</a>
        </div>
    </header>
    <main>
        <section class="mes-projets-intro">
            <h1>Bienvenue sur mon portfolio</h1>
            <p>
                Étudiante en développement web, je découvre et explore le monde de la programmation.<br>
                À travers mes projets, je développe mes compétences et transforme <br>
                mes idées en expériences web.
            </p>
            <a href="#">Découvrir mes projets</a>
        </section>

        <section class="mes-projets">
            <h2>Mes projets</h2>
                <div class="mes-projets-detail">
                    <?php foreach ($projects as $project): ?>
                        <div class="carte-projet">
                            <img src="<?= htmlspecialchars ($project ['image']) ?>" alt="e-commerce">
                            <a href="index.php?id=<?= $project['id'] ?>">
                                <h3> <?= htmlspecialchars ($project ['title']) ?> </h3>
                            </a>
                            <p>
                                <?= htmlspecialchars ($project ['description']) ?>
                            </p>
                            <p>
                                <?= htmlspecialchars (implode (" - ",$project ['technologies'])) ?>
                            </p>
                                <div class="carte-projet-footer">
                                    <span class="category <?php if ($project ['category'] == 'Web'): ?>blue<?php elseif ($project ['category'] == 'JavaScript'): ?>rose<?php else : ?>violet<?php endif; ?>"> 
                                        <?= htmlspecialchars ($project ['category']) ?> 
                                    </span>
                                    <span class="status <?php if ($project ['status'] == 'Terminé'): ?>vert<?php else: ?>rouge<?php endif; ?>"> 
                                        <?= htmlspecialchars ($project ['status']) ?> 
                                    </span>
                                </div>
                        </div>
                    <?php endforeach; ?>
                </div>
        </section>
    </main>
    <footer>
        <a href="#">contactez nous</a>
        <span class="cpyright">Copyright © 2026 — Mon Portfolio</span>
    </footer>
</body>

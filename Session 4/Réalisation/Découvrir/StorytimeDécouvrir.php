<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Storytime - Découvrir</title>
    <link rel="stylesheet" href="StorytimeDécouvrir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>


<body>

    <header>

        <div class="logo">
            <img src="../images.storytime/storytime_logo.png" alt="Logo Storytime">
        </div>

        <nav>
            <a href="#">Home</a>
            <a href="#">Découvrir</a>
            <a href="#">À propos</a>
            <a href="#">Contact</a>
            <a href="#">Se connecter</a>
        </nav>

    </header>

    <main>

    <section class="page-header">

        <span>
            DÉCOUVRIR NOS ŒUVRES
        </span>

        <h1>Explorez un univers d'histoires.</h1>

        <div class="category">
            <a href="#">Tous</a>
            <a href="#">Films & séries</a>
            <a href="#">Livres</a>
            <a href="#">Podcasts</a>
            <a href="#">Réflexions</a>
        </div>

    </section>

        <section class="featured-detail">

            <?php foreach ($oeuvres as $oeuvre): ?>


            <article class="featured-card">

                <img src="<?= htmlspecialchars ($oeuvre['image'])?>" alt="image">

                <p class="work-type"> <?= htmlspecialchars ($oeuvre['category']) ?> </p>
                
                <a href="index.php?id=<?= $oeuvre['id'] ?>">
                    <h3> <?= htmlspecialchars ($oeuvre['title']) ?> </h3>
                </a>

                <p>
                    <?= htmlspecialchars ($oeuvre['description']) ?>
                </p>

                <a href="#">Découvrir l'œuvre &rarr;</a>

            </article>

            <?php endforeach; ?>

        </section>

    </main>


    <footer>

        <div class="footer-logo">

            <img src="../images.storytime/storytime_logo.png" alt="Logo Storytime">

        </div>


        <div class="footer-contact">

            <strong>CONTACT</strong>

            <p>mouden.imane.el@gmail.com</p>

        </div>


        <div class="footer-about">

            <strong>À PROPOS</strong>

            <p>
                Une plateforme pour découvrir,
                partager et réfléchir autour des œuvres.
            </p>

        </div>


        <div class="footer-social">

            <strong>SUIVEZ-MOI</strong>

            <p><a href="#"><i class="fa-brands fa-instagram"></i></a></p>

        </div>

    </footer>

</body>

</html>
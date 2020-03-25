<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Portefolio Nils Da Costa Cruz</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./components/home/home.css">
        <link rel="stylesheet" href="./components/experiences/experiences.css">
        <link rel="stylesheet" href="./components/competences/competence.css">
        <link rel="stylesheet" href="./components/formations/formation.css">
        <link rel="stylesheet" href="./components/carousel/carousel.css">
    </head>
    
    <body>
        <?php require_once('./components/home/home.php') ?>

        <!-- ////////////////////////////Debut Page Competences///////////////////////////// -->
        <section id="pageCompetence">
            <a href="#" class="retour"><i class="far fa-times-circle 3x"></i></a>
            <?php require_once('./components/competences/competence.php') ?>
        </section>
        <!-- ////////////////////////////Fin Page Competences/////////////////////////////// -->

        <!-- ////////////////////////////Debut Page Formations////////////////////////////// -->
        <section id="pageFormation">
            <a href="#" class="retour"><i class="far fa-times-circle 3x"></i></a>
            <?php require_once('./components/formations/formation.php') ?>
        </section>
        <!-- ////////////////////////////Fin Page Formations//////////////////////////////// -->

        <!-- ////////////////////////////Debut Page Experiences///////////////////////////// -->
        <section id="pageExperience">
            <a href="#" class="retour"><i class="far fa-times-circle 3x"></i></a>
            <?php require_once('./components/experiences/experience.php') ?>
        </section>
        <!-- ////////////////////////////Fin Page Experiences/////////////////////////////// -->

        <!-- ////////////////////////////Debut Page Projet////////////////////////////////// -->
        <section id="pageProjet">
            <a href="#" class="retour"><i class="far fa-times-circle 3x"></i></a>
            <?php require_once("./components/carousel/carousel.php") ?>
        </section>
        <!-- ////////////////////////////Fin Page Projet//////////////////////////////////// -->

        <footer class="contact">
            <a href="https://www.vecteezy.com/free-vector/triangle">Triangle Vectors by Vecteezy</a>
            <h1>Contact</h1>
    <form method="post">
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('nilsdacosta@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="./components/carousel/carousel.js"></script>
        <script src="./components/experiences/experience.js"></script>
        <script src="./js/divArcticleApparition.js"></script>
        <script src="./js/reapparition.js"></script>
        <script src="./js/disparition.js"></script>
        <script src="./js/retour.js"></script>
        <script src="./js/main.js"></script>
    </body>

</html>

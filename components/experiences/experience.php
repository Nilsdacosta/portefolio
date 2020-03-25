
<?php
    function Age($date_naissance)
    {
    $am = explode('/', $date_naissance);
    $an = explode('/', date('d/m/Y'));
    if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
    return $an[2] - $am[2] - 1;
    }
?>

<div class="container">
    <h3 class="titreExp">A propos ?</h3>
    <hr>
    
    <h5 class="titreExp"><i class="far fa-id-card"></i> Qui suis-je ?</h5>
    <p>Je m'appelle Nils Da Costa Cruz
        <br> 
        Je suis née le 13 juin 1994 et j'ai donc <?php echo age('13/06/1994'); ?> ans.
        <br>
        J'ai grandis prêt de Nyons dans un petit village de 180 habitants où j'ai appris à être autonome et débrouillard.
    </p>
    <hr>
    <h5 class="titreExp"><i class="fas fa-school"></i> Ma scolarité</h5>
    <p>
        Ma scolarité a débuté dans le Vercors dans un petit collège sport et nature où encore une fois l'autonomie et la confiance étaient au centre de l'éducation.
        <br>
        Etant à l'internat j'ai aussi appris à vivre en groupe bien que je sois déjà le 5e d'une fratrie de 6 enfants.
        <br>
        Je suis ensuite revenu dans mon village d'origine et suis rentré au lycée Roumanille. J'ai suivi la fillière ES et j'ai obtenu mon Bac mention "talent" et c'est déjà pas si mal.
        <br>
        Pendant cette période lycée j'ai développé certaines passions plutôt courantes pour un lycéen :
        <br>
        - le Foot en club,
        <br>
        - la lecture => principalement de la fantasy,
        <br>
        - les jeux vidéos,
        <br>
        - le ramassage d'abricots et la maçonnerie (pas vraiment des passions mais c'est pour vous dire que j'ai commencé très tôt a travailler :D).
        <br>
    </p>
    <hr>
    <h5 class="titreExp"><i class="fas fa-briefcase"></i> L'armée</h5>
        J'ai ensuite décidé de m'engager dans l'armée. Pourquoi ??? "Si vis pacem, para bellum" comme disait mon instructeur (trad : "Qui aime la paix prépare la guerre").
        <br>
        Et j'aime la paix !!
        <br>
        J'ai passé les tests traditionnaux et ayant obtenu des résultats plutôt satisfaisant j'ai eu l'opportunité de débuter sous-officier.
        <br>
        Cependant n'aimant pas bruler les étapes, j'ai préféré commencer en tant que militaire du rang pour faire mes armes dans un premier temps.
        <br>
        Je me suis donc engagé dans le 7e Bataillon de Chasseurs Alpins ! Parce que la montagne ça vous gagne et que l'idée d'avoir une tarte sur la tête était plutôt marrante !
        <br>
        J'ai vécu de nombreuses éxpériences qui m'ont apprises humilité, persévérance, dépassement de sois et bien d'autres belles valeures !
        <br>
        Malheureusement blessé au genou je n'ai pas pu continuer la carrière que j'esperais en m'engageant mais apprendre à rebondir fait aussi parti des choses que l'on apprend.
        <br>
        J'ai eu l'opportunité de faire une reconversion dans le management. Même si ça ne correspond pas encore à ma personnalité, c'etait un choix rationnel fait pour l'avenir.
        <br>
        A la fin de ma formation, j'ai découvert la développement grâce à un ami. Et depuis, j'aime ça !
        <br>
        Mon parcours dans le développement n'est pas encore très développé mais je continue d'apprendre et de vouloir apprendre et n'attends plus qu'une belle opportunité pour enfin débuter ma vie professionelle dans le monde informatique :).
    </p>
</div>

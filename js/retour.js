    // Le boutton retour qui va renvoyer vers la page de base
    $('.retour').click(function(){
        $('#pageFormation').fadeOut();
        $('#pageCompetence').fadeOut();
        $('#pageExperience').fadeOut();
        $('#pageProjet').fadeOut();
        $(".home").fadeIn();
        reapparition();
    });

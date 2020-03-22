

$(document).ready(function(){

    apparition();


    // Récupération de l'id ou je clique pour pouvoir l'utiliser à la fonction d'apparition du sujet cliqué
    var monArticle = $("article").click(function(){
        return nomArticle = "#" + this.id;
    });


    // fonction qui va faire apparaitre le sujet cliqué
    $(monArticle).click(function(){
        console.log(nomArticle);
        disparition();

        if(nomArticle == "#competence")
        {
            $("#pageCompetence").fadeIn();
            $(".home").fadeOut();
        }else if(nomArticle == "#formation")
        {
            $("#pageFormation").fadeIn();
            $(".home").fadeOut();
        }else if(nomArticle == "#experience")
        {
            $("#pageExperience").fadeIn();
            $(".home").fadeOut();
        }else if(nomArticle == "#projet")
        {
            $("#pageProjet").fadeIn();
            $(".home").fadeOut();
        }else
        {
            alert("Erreur");
        }
    });

    // Le boutton retour qui va renvoyer vers la page de base
    $('.retour').click(function(){
        $('#pageFormation').fadeOut();
        $('#pageCompetence').fadeOut();
        $('#pageExperience').fadeOut();
        $('#pageProjet').fadeOut();
        $(".home").fadeIn();
        reapparition();
    });

});
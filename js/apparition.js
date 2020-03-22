function apparition(){
    $('#aPropos').fadeIn(700, function(){
        $('#competence').fadeIn(700, function(){
            $('#formation').fadeIn(700, function(){
                $('.content').fadeIn();
                $('#experience').fadeIn(700, function(){
                    $('#projet').fadeIn(700, function(){
                        $('.apparitionPara').fadeIn(function(){
                            $('.contact').fadeIn(700);
                        });
                    });
                });
            });
        });
    });
}

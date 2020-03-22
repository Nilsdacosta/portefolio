
// Affichage sur un mouseenter du contenu
$('.compUn').mouseenter(function(){
    $('.compLangage').fadeIn(0);
});
$('.compDeux').mouseenter(function(){
    $('.compFramework').fadeIn(0);
});
$('.compTrois').mouseenter(function(){
    $('.compLibrairie').fadeIn(0);
});
$('.compQuatre').mouseenter(function(){
    $('.compOutil').fadeIn(0);
});

// Affichage sur un mouseleave du contenu
$('.compUn').mouseleave(function(){
    $('.compLangage').fadeOut(0);
});
$('.compDeux').mouseleave(function(){
    $('.compFramework').fadeOut(0);
});
$('.compTrois').mouseleave(function(){
    $('.compLibrairie').fadeOut(0);
});
$('.compQuatre').mouseleave(function(){
    $('.compOutil').fadeOut(0);
});
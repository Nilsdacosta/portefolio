//Caroussel
$(".suivante").click(function(){
  var imageEnCours = $(this).parent().children(".interieur").children(".visible");

  var imageSuivante = imageEnCours.next();
  imageEnCours.removeClass("visible");
  
  if(imageSuivante.length){
      imageSuivante.addClass("visible");
  }else{
      imageEnCours.parent().children().first().addClass("visible");
  }
}); 

$(".precedente").click(function(){

  var imageEnCours = $(this).parent().children(".interieur").children(".visible");
  var imageSuivante = imageEnCours.prev();
  imageEnCours.removeClass("visible");
  
  if(imageSuivante.length){
      imageSuivante.addClass("visible");
  }else{
      imageEnCours.parent().children().last().addClass("visible");
  }
});


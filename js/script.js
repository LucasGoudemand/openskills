// CHIFFRE SOCIAL PROOF COMPTEUR
var n1 = 2000; // Nombre final du compteur
var cpt = 0; // Initialisation du compteur
var duree = 2; // Durée en seconde pendant laquel le compteur ira de 0 à 15
var delta = Math.ceil((duree * -100000) / n1); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node1 =  document.getElementById("compteurRecrutements"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
 
function countdown1() {
  node1.innerHTML = "+ " + ++cpt;
  if( cpt < n1 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown1, delta);
  }
}
 
setTimeout(countdown1, delta);

var n2 = 500; // Nombre final du compteur
var delta = Math.ceil((duree * -10000) / n2); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node2 =  document.getElementById("compteurFormations"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
 
function countdown2() {
  node2.innerHTML = "+ " + ++cpt;
  if( cpt < n2 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown2, delta);
  }
}
 
setTimeout(countdown2, delta);

var n3 = 1005; // Nombre final du compteur
var delta = Math.ceil((duree * -10000) / n3); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
var node3 =  document.getElementById("compteurIntegrations"); // On récupère notre noeud où sera rafraîchi la valeur du compteur
 
function countdown3() {
  node3.innerHTML = "+ " + ++cpt;
  if( cpt < n3 ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
     setTimeout(countdown3, delta);
  }
}
 
setTimeout(countdown3, delta);


//BANDEAU SLIDE AUTOMATIQUE SOCIAL PROOF


var images = document.querySelectorAll('.carousel-social-proof img');
var currentImage = 0;
var bannerWidth = document.querySelector('.carousel-social-proof').offsetWidth;
var interval = setInterval(nextImage,2000);

function nextImage() {
  images[currentImage].style.left = -bannerWidth + 'px';
  currentImage = (currentImage+1)%images.length;
  images[currentImage].style.left = '0px';
}













// SLIDE PREMIERE PAGE POUR LES AVIS
var slides = document.querySelectorAll('.block-slide');
var currentSlide = 0;
slides[currentSlide].classList.add('active');
var previousButton = document.getElementById('prev');
var nextButton = document.getElementById('next');

nextButton.addEventListener('click', function() {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add('active');
});

previousButton.addEventListener('click', function() {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  slides[currentSlide].classList.add('active');
});
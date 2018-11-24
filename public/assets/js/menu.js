var chemin = '../images/les_films/' // Chemin des images
var lesImages = [ // Nom des images et leurs extensions
    'Avengers_infinity_war.jpg',
    'Les_indestructibles_2.jpg',
    'ca_2.jpg',
    'Venom.jpg',
    'Annabelle_2.jpg',
    'Les_minions.jpg',
];

for (var i = 0; i < lesImages.length; i++) { // Assemble chemin et image
    lesImages[i] = chemin + lesImages[i];
}

var app = new app;

var boxOffice = new app.lesSlicks(lesImages.sort());
$('#filmBoxOffice').append(boxOffice);
var topFilm = new app.lesSlicks(lesImages.sort());
$('#topFilm').append(topFilm);
var filmParGenre = new app.lesSlicks(lesImages.sort());
$('#filmParGenre').append(filmParGenre);
var filmAuHasard = new app.lesSlicks(lesImages.sort());
$('#filmAuHasard').append(filmAuHasard);
app.agrandir($('.imageSlick'));


//var last = lesImages[0].split('/').length-1;

/* Film au box-office */
$(function () {
    $('.slideContainer').slick({
        //touchMove: false,
        //swipeToSlide: false,
        //responsive: true,
        //variableWidth: true,
        infinite : true,
        slidesToShow: 5,
        slidesToScroll : 5,
        swipe:false,
    });
});
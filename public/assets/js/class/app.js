var app = function () {};

app.prototype.lesSlicks = function (lesImages) {
  var last = lesImages[0].split('/').length-1;
  var laDiv = [];

  for (var i = 0; i < lesImages.length; i++) {
    var div = document.createElement('div');
    div.id = 'div'+i;

    var image = document.createElement('img');
    image.id = lesImages[i].split('/')[last].split('.')[0].replace(/_/gi, ' ');
    image.src = lesImages[i];
    image.alt = lesImages[i].split('/')[last].split('.')[0].replace(/_/gi, ' ');
    image.title = lesImages[i].split('/')[last].split('.')[0].replace(/_/gi, ' ');
    image.className = 'imageSlick';

    div.appendChild(image);

    laDiv.push(div);
  }
  return laDiv;
};

app.prototype.toutLesFilms = function (lesImages) {
  var last = lesImages[0].split('/').length-1;
  var laDiv = [];

  for (var i = 0; i < lesImages.length; i++) {
    var div = document.createElement('div');
    div.id = 'div'+i;
    div.className = 'divTLF col-md-3';

    var image = document.createElement('img');
    image.id = lesImages[i].split('/')[last].split('.')[0].replace(/_/gi, ' ');
    image.src = lesImages[i];
    image.alt = lesImages[i].split('/')[last].split('.')[0].replace(/_/gi, ' ');
    image.title = lesImages[i].split('/')[last].split('.')[0].replace(/_/gi, ' ');
    image.className = 'imageTLF';

    div.appendChild(image);

    laDiv.push(div);
  }
  return laDiv;
};

app.prototype.agrandir = function (image) {
  image
  .mouseover(function () {
    $(this).css({
      'transition' : 'all .2s ease-in-out',
      'transform' : 'scale(1.15)',
      'opacity' : '0.6'
    });

  })
  .mouseout(function () {
    $(this).css({
      'transform' : 'scale(1)',
      'opacity' : '1'
    });
  });
};

//tout les films et accueil

app.prototype.mdpLogin = function (image) {
    image.click(function(){
        var last = this.src.split('/').length-1;
        last = this.src.split('/')[last].split('.')[0];
        if (last == 'eye') {
            this.src = './../images/eye_crossed-out.png';
            $('#pwd')[0].type = 'text';
        }
        else {
            this.src = './../images/eye.png';
            $('#pwd')[0].type = 'password';
        }
    });
};

app.prototype.mdpInscription = function (image) {
    image.click(function () {
        var last = this.src.split('/').length - 1;
        last = this.src.split('/')[last].split('.')[0];
        if (last == 'eye') {
            this.src = './../images/eye_crossed-out.png';
            for (var i = 0; i < 2; i++) {
                $('.mdp')[i].type = 'text';
            }
        }
        else {
            this.src = './../images/eye.png';
            for (var i = 0; i < 2; i++) {
                $('.mdp')[i].type = 'password';
            }
        }
    });
};

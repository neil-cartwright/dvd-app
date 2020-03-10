
require('./bootstrap');


document.addEventListener('DOMContentLoaded', function() {
  let genreMenu = document.querySelector('.genre-menu');
  let clickToShowGenreMenu = document.querySelector('.clickToShowGenreMenu');
  let main = document.querySelector('.main');
  clickToShowGenreMenu.addEventListener('click', function() {
    if(genreMenu.style.position === 'fixed') {
      genreMenu.style.position = 'inherit' ;
      genreMenu.style.marginLeft = '0' + 'rem';
      clickToShowGenreMenu.classList.add('active');
    } else {
      genreMenu.style.position = 'fixed';
      genreMenu.style.marginLeft = '-999' + 'px';
      clickToShowGenreMenu.classList.remove('active');
    }
  });
});

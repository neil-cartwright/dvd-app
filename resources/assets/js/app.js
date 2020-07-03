/**
 * I don't need bootstrap. Adjust to require jquery
 */
require('./bootstrap');

$(document).ready(function () {

  /**
   * controls genre dropdown. hide, followed by remove class prevents flash of content
   */
  $('#genres').hide();
  $('#genres').removeClass('invisible');
  $('#show-genres').on('click', function () {
    $('#genres').slideToggle();
    $('#genre-caret')
      .toggleClass('fa-caret-square-up')
      .toggleClass('fa-caret-square-down')
  });

  /**
   * controls overlay for deleting films and film deletion
   */
  let overlay = $('.confirmation-overlay-outer');
  overlay.hide();
  overlay.removeClass('hidden'); // removes native class which prevents fouc
  $('.right-side').on('click', '.delete-film', function () {
    let theFilmId = $(this).data('id');
    let theFilmTitle = $(this).data('title');
    $('#the-film-title').text(theFilmTitle);
    overlay.show();
    $('#do-not-delete-film').on('click', function () {
      overlay.hide();
    })
    $('#go-ahead-and-delete-film').on('click', function () {
      window.location = '/films/delete/' + theFilmId;
    })
  });

  /**
   * ajax form script is located in left-side.js file
   */

  /**
   * toggle login form
   */
  $('#show-login').on('click', function () {
    $('.login-section').toggleClass('invisible');
  });


});
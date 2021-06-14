export default {
  init() {
    // JavaScript to be fired on all pages

    // SWITCH CONTENT
    // au clic d'un bouton...
    $('#menu-content a').on('click', function () {

      // TEST
      // console.log('test ok');

      // je mets en hightlight le bouton cliqué
      $('#menu-content a').removeClass('active');
      $(this).addClass('active');

      // ...je récup le data-target du bouton cliqué
      var target = $(this).data('target');
      // ... tous les contenus sont invisiblisés...
      $('div.contenu').removeClass('show');
      $('div.contenu').fadeOut(400);
      $(target).fadeIn(400);

    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

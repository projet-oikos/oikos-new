$(document).ready(function() {

    /* This is basic - uses default settings */
  $('.imgperso').on('click', event => {
      //var $image = $('.imgperso');
      var $image = $(event.currentTarget);
      $image.viewer({
          viewed: function() {
              $image.viewer('zoomTo', 1);
          }
      });

// Get the Viewer.js instance after initialized
      var viewer = $image.data('viewer');

// View a list of images

      $('.imgperso').viewer();

  });
    $('#customer').DataTable()
});


$(document).ready(function () {

    /* This is basic - uses default settings */
    $('.imgperso').on('click', event => {
        //var $image = $('.imgperso');
        var $image = $(event.currentTarget);
        $image.viewer({
            viewed: function () {
                $image.viewer('zoomTo', 1);
            }
        });

// Get the Viewer.js instance after initialized
        var viewer = $image.data('viewer');

// View a list of images

        $('.imgperso').viewer();

    });

/////////// script etoile de notation produit//////////////
    var $value = 0;
    $('#s1').on('click', function () {
        $("hidden").remove();
        $('.fa-star').css('color', 'black');
        $('#s1').css("color", "orange");
        $value = 1;
        $("form").append("<input name='note' type='hidden' value=" + $value + ">");
    });
    $('#s2').on('click', function () {
        $("hidden").remove();
        $('.fa-star').css('color', 'black');
        $('#s1, #s2').css('color', 'orange');
        $value = 2;
        $("form").append("<input name='note' type='hidden' value=" + $value + ">");
    });
    $('#s3').on('click', function () {
        $("hidden").remove();
        $('.fa-star').css('color', 'black');
        $('#s1, #s2,#s3').css('color', 'orange');
        $value = 3;
        $("form").append("<input name='note' type='hidden' value=" + $value + ">");
    });
    $('#s4').on('click', function () {
        $("hidden").remove();
        $('.fa-star').css('color', 'black');
        $('#s1,#s2,#s3,#s4').css('color', 'orange');
        $value = 4;
        $("form").append("<input name='note' type='hidden' value=" + $value + ">");
    });
    $('#s5').on('click', function () {
        $("hidden").remove();
        $('.fa-star').css('color', 'black');
        $('.fa-star').css('color', 'orange');
        $value = 5;
        $("form").append("<input name='note' type='hidden' value=" + $value + ">");
    });


});

function showStar(id) {
    let note = $('.star'+id).val();
    // console.log(id + ' correspond ' + note);
    let impro ='.selectNote'+id;

    $test = $(impro).children().slice(0, note);
    $test.addClass('checked');
    }
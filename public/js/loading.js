$(window).load(function() {
    $('.loading').css('display', 'none');
});

$('a').click(function() {
    var url = $(this).attr('href');




    if(url.indexOf('.') > 0 && url !== '' && url !== '#' && url !== ' ' && url !== null) {
        $('.loading').css('display', 'block');
    }
});

// $('select').on('change', function(){
//     var url = $(this).closest('form').attr('action');
//
//     if(url !== '' && url !== '#' && url !== ' ' && url !== null) {
//         $('.loading').css('display', 'block');
//     }
// });

$("input[type='submit'], button[type='submit']").click(function(){
    var url = $(this).closest('form').attr('action');

    if(url !== '' && url !== '#' && url !== ' ' && url !== null) {
        $('.loading').css('display', 'block');
    }
});



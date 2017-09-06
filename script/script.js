(function(){

var screenHeight = $('html').height()
var orientation = "landscape";

$(window).on('resize',function(){
    screenHeight = $('html').height();
});
$( window ).on( "orientationchange", function( event ) {
    orientation = event.orientation;
});
// Trigger orientation change pour mettre à jour la variable au chargement
$(window).orientationchange();

$(window).on('load',function(){
    $('#bande').css('height','100%');
    setTimeout(function(){
        appearAnimation(0);
    },500);
});

$(window).on('scroll',function(){
    const scrollValue = $(this).scrollTop() ;
    // Cacher/Afficher le choix des langues
    if (scrollValue / screenHeight > 0.0925) {
        $('#languages').css('opacity','0');
    } else {
        $('#languages').css('opacity','1');
    }
    // Lancer les animations d'apparitions
    appearAnimation(scrollValue);
    // Mettre à jour le menu
    actualizeMenu(scrollValue);
    console.log(scrollValue)
});

function appearAnimation(scrollValue){
    $('.to_anim:not(.already_anim)').each(function(index){
        if ( $(this).offset().top < scrollValue + screenHeight ) {
            const div = $(this);
            div.css('transform','translateX(0%)');
            div.css('-webkit-transform','translateX(0%)');
            div.addClass('already_anim');
        }
    });
}

function actualizeMenu(scrollValue){
    var decal = 4;
    $($('.section').get().reverse()).each(function(index){
        decal = decal -1;
        if ( ($(this).offset().top - scrollValue - (screenHeight / 8)) - 4 <= 0) {
            if (!$('.item[name='+ $(this).attr('id') +']').hasClass('medium')) {
                $('.item.medium').removeClass('medium');
                $('.item[name='+ $(this).attr('id') +']').addClass('medium');
                move_items(decal);
            }
            return false;
        }
    });
}
    function move_items(decal){
        if (orientation == 'landscape') {
            $('.items').css({
                'transform':'translateX(-'+ decal * 24.9999 +'%)',
                '-webkit-transform':'translateX(-'+ decal * 24.9999 +'%)'
            });
        } else {
            $('.items').css({
                'transform':'translateX(-'+  0 +'%)',
                '-webkit-transform':'translateX(-'+  0 +'%)'
            });
        }
    }

$('menu .item').on('click',function(){
    const distance = $('#'+ $(this).attr('name') ).offset().top - (screenHeight / 8);
    const speed = distance - $(window).scrollTop() >= 0 ? distance - $(window).scrollTop() : -(distance - $(window).scrollTop());
    $('html, body').animate({
        scrollTop: distance + 'px'
    },(speed/screenHeight)*600,$.bez([0.4,0,0.2,1]));
});

})(jQuery);

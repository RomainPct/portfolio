(function(){

var screenHeight = $('html').height()

$(window).on('resize',function(){
    screenHeight = $('html').height();
});

$(window).on('load',function(){
    $('#bande').css('height','100%');
    setTimeout(function(){
        appearAnimation(0);
    },500);
});

$(window).on('scroll',function(){
    const scrollValue = $(this).scrollTop() ;
    if (scrollValue / screenHeight > 0.0925) {
        $('#languages').css('opacity','0');
    } else {
        $('#languages').css('opacity','1');
    }
    appearAnimation(scrollValue);
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

$('menu .item').on('click',function(){
    const distance = $('#'+ $(this).attr('name') ).offset().top - (screenHeight / 8);
    const speed = distance - $(window).scrollTop() >= 0 ? distance - $(window).scrollTop() : -(distance - $(window).scrollTop());
    $('html, body').animate({
        scrollTop: distance + 'px'
    },(speed/screenHeight)*600,$.bez([0.4,0,0.2,1]));
});

})(jQuery);

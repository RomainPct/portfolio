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
    $('.to_anim').each(function(index){
        if ( $(this).offset().top < scrollValue + screenHeight ) {
            const div = $(this);
            div.css('transform','translateX(0%)');
            div.css('-webkit-transform','translateX(0%)');
            setTimeout(function(){
                div.removeClass('to_anim')
            },1000);
        }
    });
}

})(jQuery);

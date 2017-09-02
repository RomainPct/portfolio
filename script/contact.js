(function(){

const fixed_contact_form = $("#fixed_contact_form");
var form_opened = false;

$(".dir_message_textarea").on('click',function(){
    if (!form_opened) {
        console.log('fonction ouverture');
        const pos = $("#contact").offset().top + ( $('#contact_form').height()/2 ) - ( $("html").height() / 2 ) - 10
        $('html,body').animate({
            scrollTop: pos + "px"
        },200,$.bez([0.4,0,0.2,1]),function(){
                fixed_contact_form.css({
                        'display':'block',
                        'background-color':'rgba(0,0,0,0.5)'
                });
                $('#message_input').focus();
                form_opened = true;
        });
    }
});

$(window).on('scroll',function(){
    if (form_opened) {
        console.log('fonction fermeture');
        form_opened = false;
        fixed_contact_form.css({
                'display':'none',
                'background-color':'rgba(0,0,0,0.0)'
        });
    }
})

})(jQuery);

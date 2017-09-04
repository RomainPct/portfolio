(function(){

const fixed_contact_form = $("#fixed_contact_form"),
            fixed_form = $('#fixed_form'),
            messages = $('#messages');
var form_opened = false;

$(".dir_message_textarea").on('click',function(){
    if (!form_opened) {
        const pos = $("#contact").offset().top + ( $('#contact_form').height()/2 ) - ( $("html").height() / 2 ) - 10;
        $('html,body').animate({
            scrollTop: pos + "px"
        },200,$.bez([0.4,0,0.2,1]),function(){
                fixed_contact_form.css({
                        'display':'block',
                        'background-color':'rgba(0,0,0,0.5)'
                });
                if ( !is_touchscreen() ) {
                    $('#message_input').focus();
                } else {
                    $('#input_accroche').blur();
                }
                fixed_form.animate({
                    'height':'100%'
                },500,$.bez([0.4,0,0.2,1]),function() {
                    form_opened = true;
                })
        });
    }
});


function is_touchscreen() {
    if ("ontouchstart" in document.documentElement) {
        return true;
    } else {
        return false;
    }
}

// Première étape contact
$('.send_message').on('click',function(){
    if ( verifMessageTextarea() ) {
        // OK Empecher de quitter via le scroll
        form_opened = false;
        $('html,body').css('overflow-y','hidden');
        // OK Cacher partie answer
        messages.animate({
            'height':'100%'
        },300,$.bez([.2,0,.4,1]),function() {
            $('#answer1').css('display','none');
        })
        //  OK Faire apparitre message de l'utilisateur
        displayMessage2();
        // OK Faire apparaitre réponse auto
        displayMessage3();
        // Faire apparaitre champ input nom et mail
        displayAnswer2();
    }
});

// Validation message textarea
$('#message_input').on('change paste keyup',function(){
    verifMessageTextarea();
});
function verifMessageTextarea() {
    const value = $('#message_input').val();
    if (value == "") {
        $('#message_input').addClass('error');
        return false;
    } else {
        $('#message_input').removeClass('error');
        return true;
    }
}

// Seconde étape contact
$('.send_contact_info').on('click',function() {
    // Vérifier informations de l'utilisateur
    if (verifNameInput() && verifEmailInput() ) {
        // Cacher partie answer2
        messages.animate({
            'height':'100%'
        },300,$.bez([.2,0,.4,1]),function(){
            $('#answer2').css('display','none');
        });
        // Faire apparaitre message de l'utilisateur
        displayMessage4();
        // Courte pause
        setTimeout(function(){
            // Débloquer scroll
            $('html,body').css('overflow-y','auto');
            // Replacer scroll
            $('#message_beginning').css('display','none');
            $('#message_end').css('display','block');
            const pos = $("#contact").offset().top + ( $('#contact_form').height()/2 ) - ( $("html").height() / 2 ) - 10;
            $('html,body').scrollTop(pos);
            // Fermer boite de dialogue message #fixed_contact_form
            fixed_contact_form.css({
                'top':'-50%',
                'opacity':'0'
            });
            // Afficher message final dans #contact_form
            $('#message_end').css({
                'opacity':'1',
                'transform':'translateY(0%)',
                '-webkit-transform':'translateY(0%)'
            });
        },1850);
        // Envoyer le formulaire via ajax
        sendForm();
    }
});


function sendForm() {
    var data = {
        'message': $('#message_input').val(),
        'name': $('#name_input').val(),
        'email': $('#mail_input').val()
    };
    const url = 'php/send_contact_form.php';
    $.post(url, data )
        .fail(function(){
            alert('Une erreur vient de se produire. Merci de me contacter simplement par mail : romain.penchenat@gmail.com')
        });
}
// Validation name input
$('#name_input').on('change paste keyup',function(){
    verifNameInput();
});
function verifNameInput() {
    const value = $('#name_input').val();
    if (value == "" || value.length > 50) {
        $('#name_input').addClass('error');
        return false;
    } else {
        $('#name_input').removeClass('error');
        return true;
    }
}

// validation email input
$('#mail_input').on('change paste keyup',function(){
    verifEmailInput();
});
function verifEmailInput() {
    const value = $('#mail_input').val();
    const mail_pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    if (value == "" || value.length > 100 || !mail_pattern.test(value) ) {
        $('#mail_input').addClass('error');
        return false;
    } else {
        $('#mail_input').removeClass('error');
        return true;
    }
}


// Gérer le contenu message trop grand et ajuster le scroll
function adjustMessageScroll(count,time) {
    var totalHeight = 0;
    var rowNumber = 0;
    $('#messages .row').each(function(index){
        if (rowNumber < count) {
            totalHeight += $(this).outerHeight()
            rowNumber++;
        }
    });
    if (totalHeight > $('#fixed_form .frame').height() ) {
        setTimeout(function(){
            messages.animate({
                scrollTop : messages.prop("scrollHeight")
            },200)
        },time)
    }
}
function displayMessage2(){
    messages.append('<div class="row"><div class="col xs-10 offset-xs-2 text-right po-adaptativ-margin"><div id="message2" class="box message message-user new-message yellow-accent"><h4 class="text-left">' + $('#message_input').val().replace(/\n/g,"<br>") + '</h4></div></div></div>');
    setTimeout(function(){
        $('#message2').removeClass('new-message')
        adjustMessageScroll(2,500);
    },150)
}
function displayMessage3(){
    messages.append('<div class="row"><div class="col xs-10 po-adaptativ-margin"><div id="message3" class="box message new-message message-me blue-bg"><h4 class="text-white100">Merci pour votre message ! <br> Pourriez-vous me communiquer vos coordonnées afin que je puisse vous répondre prochainement ?</h4></div></div></div>');
    setTimeout(function(){
        $('#message3').removeClass('new-message')
        adjustMessageScroll(3,500);
    },700)
}
function displayAnswer2() {
    const size = $('.frame').height() - $('#answer2').height();
    setTimeout(function(){
        $('#answer2').css('display','block')
        messages.animate({
            'height': size + "px"
        },300,function(){
            adjustMessageScroll(3,0);
        });
    },1250)
}
function displayMessage4(){
    messages.append('<div class="row"><div class="col xs-10 offset-xs-2 text-right po-adaptativ-margin"><div id="message4" class="box message message-user new-message yellow-accent"><h4 class="text-left"><div class="bold">'+ $('#name_input').val() +'</div>'+ $('#mail_input').val() +'</h4></div></div></div>');
    setTimeout(function(){
        $('#message4').removeClass('new-message')
        adjustMessageScroll(4,500);
    },150)
}

// Quitter en cliquant à coté

// OK Quitter via le scroll
$(window).on('scroll',function(){
    if (form_opened) {
        if (!is_touchscreen()) {
            form_opened = false;
            fixed_contact_form.css({
                    'display':'none',
                    'background-color':'rgba(0,0,0,0.0)'
            });
        }
    }
})

})(jQuery);

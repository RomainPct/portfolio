<?php
class language {

private $_lang = 'fr';

private $_data = [
    'home' => ['Accueil','Home'],
    'bio' => ['Bio','Bio'],
    'works' => ['Projets','Works'],
    'contact' => ['Contact','Contact'],
    'text1' => ["Je suis un designer français de 17ans. Je m’intéresse énormément à l’UX design mais je connais et améliore aussi mes compétences en UI design, motion design et web développement. Depuis mes 13 ans, je m’intéresse à de nombreux sujets liés au digital.","I am a 17 years old french designer. I'm interested by UX design a lot but I also know and improve my skills into UI design, motion design and webdevelopment. Since I’m thirteen years old, I learn many things about the digital."],
    'text2' => ["Premièrement, j’ai appris le développement web avec les languages html et css puis le php par la suite. Puis j’ai réalisé plusieurs projets web avec mes amis afin de me forger une première expérience. Ce fut une étape très constructive pour ma vision actuelle du digital.","First I learned web development with html, css and php languages. Then I made some little web projects with my friends or for my uncle. That was very constructive for me."],
    'text3' => ["Mi 2016, je me suis finalement intéressé au design web. J’ai alors découvert les principes de l’UI design, les méthodes de recherche pour l’UX et bien plus. Mes compétences en développement m’ont alors aidé à créer des interfaces cohérentes.","Mid 2016, I was interisting by webdesign. I have discover UI principles, UX thinking and so much more. My abilities in development help me to create coherent interfaces."],
    'text4' => ["Finalement, j’ai décidé de découvrir le développement IOS durant l’été 2017. Après cela, j’aurais des connaissances relativement important dans chaque discipline de la création digitale et je pourrais donc plus facilement choisir ma spécialisation.","Finally, I decide to discover app development world during summer 2017. My final goal is to know a little each part of digital creation to choose my speciality next."],
    'message1' => ["Si vous recherchez un UX-UI designer pour faire avancer votre projet ou que vous voulez simplement prendre contact avec moi, n’hésitez pas à me laisser votre mesage.","If you search an UX-UI designer to make advance your project or you simply want to take contact with me, don't hesitate to let me your message."],
    'message2' => ["Merci pour votre message ! <br>Pourriez-vous me communiquer vos coordonnées afin que je puisse vous répondre prochainement ?","Thanks for your message ! <br>Can you give me your contact information so that I could answer to you shortly ?"],
    'message3' => ["Merci, je prendrai le temps de lire votre message et vous répondrez avec plaisir ! <br> Bonne fin de visite sur mon portfolio ;-)","Thanks, I will take the time to read your message and will answer to you with happiness. <br>Good visit end on my portfolio ;-)"],
    'message_input' => ["Votre message","Your message"],
    'send_button' => ["Envoyer","Send"],
    'name_input' => ["Votre nom","Your name"],
    'mail_input' => ["Votre adresse mail","Your email adress"]
];

    public function __construct($lang) {
        if (!empty($lang)) {
            $this->_lang = $lang;
        }
    }

    public function is_this_language($lang){
        if ($this->_lang != $lang) {
            echo 'class="disable"';
        }
    }

    public function get_text($type){
        $number = ( $this->_lang == 'fr' ? 0 : 1);
        echo $this->_data[$type][$number];
    }


}

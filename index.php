<?php
include_once 'php/language.class.php';
$data = new language($_GET['lang']);
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title> Romain Penchenat - UI/UX Designer</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="style/simpleGrid/href/simpleGrid.min.css">
    <link rel="stylesheet" href="style/fontSize.min.css">
    <link rel="stylesheet" href="style/style.min.css">
</head>

<body>

<audio id="beep-user" src="ressources/sounds/beep1.mp3" preload="auto"></audio>
<audio id="beep-me" src="ressources/sounds/beep2.mp3" preload="auto"></audio>

    <div id="bande" class="col xs-1 yellow-accent"></div>

    <menu>
        <div class="row">
            <div id="languages" class="col xs-2 text-center">
                <a href="?lang=en"><img <?php $data->is_this_language('en'); ?> src="ressources/icones/english.svg" alt="english"></a>
                <a href="?lang=fr"><img <?php $data->is_this_language('fr'); ?>  src="ressources/icones/francais.svg" alt="francais"></a>
            </div>
            <div class="col xs-7 po-10  offset-xs-5 offset-po-2 ">
                <div class="row box items text-center">
                    <div class="col xs-3 no-margin">
                        <h4 class="medium item" name="home" ><?php $data->get_text('home'); ?></h4>
                    </div>
                    <div class="col xs-3 no-margin">
                        <h4 class="item" name="bio" ><?php $data->get_text('bio'); ?></h4>
                    </div>
                    <div class="col xs-3 no-margin">
                        <h4 class="item" name="works" ><?php $data->get_text('works'); ?></h4>
                    </div>
                    <div class="col xs-3 no-margin">
                        <h4 class="item" name="contact" ><?php $data->get_text('contact'); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </menu>

<div id="container">
    <div id="home" class="section">
        <div class="medium-space"></div>
        <div class="row">
            <div class="col xs-6 po-12 to_anim fr_left">
                <div class="row">
                    <div class="col xs-0 md-4 po-0 md-block">
                        <div class="box image">
                            <picture>
                                <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/general/logo-ultra.png">
                                <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/general/logo-large.png">
                                <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/general/logo-medium.png">
                                <img src="ressources/general/logo-small.png" alt="logo">
                            </picture>
                        </div>
                    </div>
                    <div class="col xs-12 md-8 po-10 offset-po-1">
                        <h1 class="headache">Romain <br>Penchenat</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col xs-12 po-no-bottom-margin po-no-left-margin">
                        <div class="box classic text-center white-bg">
                            <h1>UX - UI Design</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col xs-6 po-12 to_anim fr_right po-no-bottom-margin">
                <div class="box image">
                    <picture>
                        <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/general/profil-ultra.jpg">
                        <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/general/profil-large.jpg">
                        <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/general/profil-medium.jpg">

                        <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/general/profil-ultra.jpg">
                        <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/general/profil-large.jpg">
                        <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/general/profil-medium.jpg">
                        <img src="ressources/general/profil-small.jpg" alt="Romain Penchenat UX-UI Designer">
                    </picture>
                </div>
            </div>
        </div>
        <div class="large-space"></div>
    </div> <!-- Fin Home -->
    <div id="bio" class="section">
        <div class="row to_anim fr_left">
            <div class="col xs-11">
                <h4><?php $data->get_text('text1'); ?></h4>
            </div>
        </div>
        <div class="row to_anim fr_left">
            <div class="col xs-2 po-4 po-no-bottom-margin">
                <div class="box classic text-center po-small-padding">
                    <h3>2013</h3></div>
            </div>
            <div class="col xs-9 po-11">
                <div class="box invisible">
                    <h4><?php $data->get_text('text2'); ?></h4></div>
            </div>
        </div>
        <div class="row to_anim fr_left">
            <div class="col xs-2 po-4 po-no-bottom-margin">
                <div class="box classic text-center po-small-padding">
                    <h3>2016</h3></div>
            </div>
            <div class="col xs-9 po-11">
                <div class="box invisible">
                    <h4><?php $data->get_text('text3'); ?></h4></div>
            </div>
        </div>
        <div class="row to_anim fr_left">
            <div class="col xs-2 po-4 po-no-bottom-margin">
                <div class="box classic text-center po-small-padding">
                    <h3>2017</h3></div>
            </div>
            <div class="col xs-9 po-11">
                <div class="box invisible">
                    <h4><?php $data->get_text('text4'); ?></h4></div>
            </div>
        </div>
        <div class="large-space"></div>
    </div> <!-- Fin Bio -->
    <div id="works" class="section">
        <div class="row">
            <a href="http://www.location-villacassis.com" target="_blank"><div class="col xs-8 po-12 to_anim fr_left">
                <div class="box image size30vw po-size-50vw w_shadow hoverable">
                    <h2 class="headache text-white100 text-center">Les villas de cassis</h2>
                    <picture>
                        <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/projets/villa_cassis-ultra.jpg">
                        <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/projets/villa_cassis-large.jpg">
                        <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/projets/villa_cassis-medium.jpg">

                        <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/projets/villa_cassis-ultra.jpg">
                        <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/projets/villa_cassis-large.jpg">
                        <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/projets/villa_cassis-medium.jpg">
                        <img src="ressources/projets/villa_cassis-small.jpg" alt="Les villas de cassis">
                    </picture>
                </div>
            </div></a>
            <a href="https://www.passion-spa-brive.fr" target="_blank"><div class="col xs-4 po-12 to_anim fr_right">
                <div class="box image size30vw po-size-50vw la-img_full_height w_shadow hoverable">
                    <h2 class="headache text-white100 text-center">Passion Spa Brive</h2>
                    <picture>
                        <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/projets/passionspabrive-ultra-mobile.jpg">
                        <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/projets/passionspabrive-large-mobile.jpg">
                        <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/projets/passionspabrive-medium-mobile.jpg">

                        <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/projets/passionspabrive-ultra.jpg">
                        <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/projets/passionspabrive-large.jpg">
                        <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/projets/passionspabrive-medium.jpg">
                        <img src="ressources/projets/passionspabrive-small.jpg" alt="Passion Spa Brive">
                    </picture>
                </div>
            </div></a>
            <a href="https://www.behance.net/tellusoffi5fd1" target="_blank"><div class="col xs-4 po-12 to_anim fr_left">
                <div class="box image size30vw po-size-50vw la-img_full_height w_shadow hoverable">
                    <h2 class="headache text-white100 text-center">#DailyUI Challenge</h2>
                    <picture>
                        <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/projets/dailyui-ultra-mobile.jpg">
                        <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/projets/dailyui-large-mobile.jpg">
                        <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/projets/dailyui-medium-mobile.jpg">

                        <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/projets/dailyui-ultra.jpg">
                        <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/projets/dailyui-large.jpg">
                        <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/projets/dailyui-medium.jpg">
                        <img src="ressources/projets/dailyui-small.jpg" alt="DailyUI Challenge">
                    </picture>
                </div>
            </div></a>
            <div class="col xs-8 po-12 to_anim fr_right">
                <div class="box image size30vw po-size-50vw w_shadow hoverable">
                    <h2 class="headache text-white100 text-center">Le Drive Malemort</h2>
                    <picture>
                        <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/projets/drive_malemort-ultra.jpg">
                        <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/projets/drive_malemort-large.jpg">
                        <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/projets/drive_malemort-medium.jpg">

                        <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/projets/drive_malemort-ultra.jpg">
                        <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/projets/drive_malemort-large.jpg">
                        <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/projets/drive_malemort-medium.jpg">
                        <img src="ressources/projets/drive_malemort-small.jpg" alt="Le drive malemort">
                    </picture>
                </div>
            </div>
        </div>
        <div class="large-space"></div>
    </div> <!-- Fin Works -->
    <div id="contact" class="section">
        <div id="contact_form" class="row to_anim fr_left">
            <div id="message_beginning" class="col xs-12">
                <div class="box classic white-bg">
                    <div class="row po-first-msg">
                        <div class="col xs-2 po-0">
                            <div class="box image circle img_full_height">
                                <picture>
                                    <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/general/profil-ultra.jpg">
                                    <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/general/profil-large.jpg">
                                    <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/general/profil-medium.jpg">

                                    <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/general/profil-ultra.jpg">
                                    <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/general/profil-large.jpg">
                                    <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/general/profil-medium.jpg">
                                    <img src="ressources/general/profil-small.jpg" alt="Romain Penchenat UX-UI Designer">
                                </picture>
                            </div>
                        </div>
                        <div class="col xs-10 po-12 po-no-bottom-margin">
                            <div class="box message message-me blue-bg">
                                <h4 class="text-white100"><?php $data->get_text('message1'); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row line"></div>
                    <div class="row">
                        <div class="col xs-9 po-10 no-margin">
                            <input id="input_accroche" type="text" class="rp_input dir_message_textarea" placeholder="<?php $data->get_text('message_input'); ?>">
                        </div>
                        <div class="col xs-3 po-0 text-center no-margin">
                            <button class="button dir_message_textarea" type="button"><?php $data->get_text('send_button'); ?></button>
                        </div>
                        <div class="col xs-0 po-2 no-margin no-padding">
                            <button class="icon-button dir_message_textarea" type="button"><img src="ressources/icones/send.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="message_end" class="col xs-12 no-margin">
                <div class="box invisible">
                    <div class="row po-first-msg">
                        <div class="col xs-2 po-0 no-margin">
                            <div class="box image circle img_full_height">
                                <picture>
                                    <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/general/profil-ultra.jpg">
                                    <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/general/profil-large.jpg">
                                    <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/general/profil-medium.jpg">

                                    <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/general/profil-ultra.jpg">
                                    <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/general/profil-large.jpg">
                                    <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/general/profil-medium.jpg">
                                    <img src="ressources/general/profil-small.jpg" alt="Romain Penchenat UX-UI Designer">
                                </picture>
                            </div>
                        </div>
                        <div class="col xs-10 po-12 no-margin">
                            <div class="box message message-me blue-bg">
                                <h4 class="text-white100"><?php $data->get_text('message3'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="large-space"></div>
        <div class="row to_anim fr_left">
            <div class="col xs-12 text-center">
                <h5>Romain Penchenat</h5></div>
        </div>
        <div class="row to_anim fr_left">
            <div class="col xs-12 text-center">
                <h4><img src="ressources/icones/mail.svg" class="icon"> romain.penchenat@gmail.com</h4></div>
        </div>
        <div class="row to_anim fr_left">
            <div class="col xs-12 text-center">
                <h4><img src="ressources/icones/tel.svg" class="icon">07 81 86 53 31</h4></div>
        </div>
        <div class="medium-space"></div>
        <div class="row to_anim fr_right">
            <div class="col xs-2  po-4 offset-xs-1 offset-po-0 text-center">
                <a href="https://www.behance.net/tellusoffi5fd1" target="_blank">
                    <div class="box image social white-bg"><img src="ressources/icones/behance.svg" alt=""></div>
                </a>
            </div>
            <div class="col xs-2 po-4 text-center">
                <a href="https://dribbble.com/RomainPenchenat" target="_blank">
                    <div class="box image social white-bg"><img src="ressources/icones/dribbble.svg" alt=""></div>
                </a>
            </div>
            <div class="col xs-2 po-4 text-center">
                <a href="https://twitter.com/romainp_design" target="_blank">
                    <div class="box image social white-bg"><img src="ressources/icones/twitter.svg" alt=""></div>
                </a>
            </div>
            <div class="col xs-2 po-4 offset-po-2 text-center">
                <a href="https://www.instagram.com/romainpdesign/" target="_blank">
                    <div class="box image social white-bg"><img src="ressources/icones/instagram.svg" alt=""></div>
                </a>
            </div>
            <div class="col xs-2 po-4 text-center">
                <a href="https://www.messenger.com/t/romainpdesign" target="_blank">
                    <div class="box image social white-bg"><img src="ressources/icones/messenger.svg" alt=""></div>
                </a>
            </div>
        </div>
        <div class="large-space"></div>
    </div> <!-- Fin Contact -->
</div> <!-- Fin container -->


<!--  Ultime contact form en position fixed -->
<div id="fixed_contact_form" class="row">
    <div id="fixed_form" class="col xs-12 no-margin">
        <div class="box classic frame white-bg">
            <div id="messages">
                <div class="row po-first-msg">
                    <div class="col xs-2 po-0">
                        <div class="box image circle img_full_height">
                            <picture>
                                <source media="(min-width: 960px) and (orientation:portrait)" srcset="ressources/general/profil-ultra.jpg">
                                <source media="(min-width: 720px) and (orientation:portrait)" srcset="ressources/general/profil-large.jpg">
                                <source media="(min-width: 400px) and (orientation:portrait)" srcset="ressources/general/profil-medium.jpg">

                                <source media="(min-width: 1920px) and (orientation:landscape)" srcset="ressources/general/profil-ultra.jpg">
                                <source media="(min-width: 1440px) and (orientation:landscape)" srcset="ressources/general/profil-large.jpg">
                                <source media="(min-width: 780px) and (orientation:landscape)" srcset="ressources/general/profil-medium.jpg">
                                <img src="ressources/general/profil-small.jpg" alt="Romain Penchenat UX-UI Designer">
                            </picture>
                        </div>
                    </div>
                    <div class="col xs-10 po-12 po-no-bottom-margin">
                        <div class="box message message-me blue-bg">
                            <h4 class="text-white100"><?php $data->get_text('message1'); ?></h4>
                        </div>
                    </div>
                </div>
            </div> <!-- fin #messages -->
            <div id="answer1">
                <div class="row line"></div>
                <div class="row form">
                    <div class="col xs-9 po-10 no-margin full-height">
                        <textarea id="message_input" class="rp_input" placeholder="<?php $data->get_text('message_input'); ?>"></textarea>
                    </div>
                    <div class="col xs-3 po-0 text-center no-margin">
                        <button class="button send_message" type="button"><?php $data->get_text('send_button'); ?></button>
                    </div>
                    <div class="col xs-0 po-2 no-margin no-padding">
                        <button class="icon-button send_message" type="button"><img src="ressources/icones/send.svg" alt=""></button>
                    </div>
                </div>
            </div> <!-- Fin #answer1 -->
            <div id="answer2">
                <div class="row line"></div>
                <div class="row full-height">
                    <div class="col xs-4 po-8 no-margin">
                        <input id="name_input" type="text" class="rp_input" maxlength="50" autocomplete="name" placeholder="<?php $data->get_text('name_input'); ?>">
                    </div>
                    <div class="col xs-5 po-10 no-margin">
                        <input id="mail_input" type="email" class="rp_input" maxlength="100" autocomplete="email" placeholder="<?php $data->get_text('mail_input'); ?>">
                    </div>
                    <div class="col xs-3 po-0 text-center no-margin">
                        <button class="button send_contact_info" type="button"><?php $data->get_text('send_button'); ?></button>
                    </div>
                    <div class="col xs-0 po-2 no-margin no-padding">
                        <button class="icon-button send_contact_info" type="button"><img src="ressources/icones/send.svg" alt=""></button>
                    </div>
                </div>
            </div> <!-- Fin #answer2 -->
        </div>
    </div>
</div>

<div id="message2-data"><?php $data->get_text('message2'); ?></div>

    <script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="script/jquery.mobile.orientation/jquery.mobile.custom.min.js"></script>
    <script type="text/javascript" src="script/bez-master/src/jquery.bez.min.js"></script>
    <script type="text/javascript" src="script/script.min.js"></script>
    <script type="text/javascript" src="script/contact.min.js"></script>
</body>

</html>

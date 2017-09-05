<?php
$title = 'Prise de contact de '.$_POST['name'];
$content = 'De : '.$_POST['name'].' : '.$_POST['email'].'  \r\n \r\n '.$_POST['message'];
$header = 'Reply-To: '.$_POST['email'];
mail('romain.penchenat@gmail.com',$title,$content,$header);

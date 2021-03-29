<?php
require_once("helpers.php");
function ten ($text, $length = 300)
{ 
    if(strlen($text) < $length){
        return $text;
    } else {
        $one = substr($text, 0, $length);
        return $one . '<a class="post-text__more-link" href="#">Читать далее</a>';
    }
 
}

$is_auth = rand(0, 1);
$title = "главная";
$user_name = 'Диана'; // укажите здесь ваше имя

$article = [[ "titie" => "Цитата", "typ" => "post-quote", "content" => "Мы в жизни любим только раз, а после ищем лишь похожих", "name" => "Лариса", "avatar" => "userpic-larisa-small.jpg"],
[ "titie" => "Игра престолов", "typ" => "post-text", "content" => "Не могу дождаться начала финального сезона своего любимого сериала!", "name" => "Владик", "avatar" => "userpic.jpg"],
[ "titie" => "Наконец, обработал фотки!", "typ" => "post-photo", "content" => "rock-medium.jpg", "name" => "Виктор", "avatar" => "userpic-mark.jpg"],
[ "titie" => "Моя мечта", "typ" => "post-photo", "content" => "coast-medium.jpg", "name" => "Лариса", "avatar" => "userpic-larisa-small.jpg"],
[ "titie" => "Лучшие курсы", "typ" => "post-link", "content" => "www.htmlacademy.ru", "name" => "Владик", "avatar" => "userpic.jpg"],
];
  $content =  include_template("main.php",  ["article"=>$article] );          
  $layout =  include_template("layout.php",  ["content"=>$content, "title"=>$title] );  
  
print($layout);               
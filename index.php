<?php
//dichiarazione dei parametri necessari

$weekDay=["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
$weekDayN=[  "Mon"=>0,  "Tue"=>1,  "Wed"=>2,  "Thu"=>3,  "Fri"=>4,  "Sat"=>5,  "Sun"=>6];
$weekDayIta=[  "Mon"=>"Lunedi",  "Tue"=>"Martedì",  "Wed"=>"Mercoledì",  "Thu"=>"Giovedì",  "Fri"=>"Venerdì",  "Sat"=>"Sabato",  "Sun"=>"Domenica"];
$oggi = date("D"); //<= Utile per estrarre il nome del giorno tre lettere

$json = file_get_contents("composer.json"); // <= Estraggo il file
$round = json_decode($json,true);           //  <= Decodifico il file in un array associativo

require("controller/funzioniControllo.php");

require("views");

 ?>

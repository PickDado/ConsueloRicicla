<?php

$weekDay=["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
$weekDayN=[  "Mon"=>0,  "Tue"=>1,  "Wed"=>2,  "Thu"=>3,  "Fri"=>4,  "Sat"=>5,  "Sun"=>6];
$weekDayIta=[  "Mon"=>"Lunedi",  "Tue"=>"Martedì",  "Wed"=>"Mercoledì",  "Thu"=>"Giovedì",  "Fri"=>"Venerdì",  "Sat"=>"Sabato",  "Sun"=>"Domenica"];


//inclusione e "decodifica" del file json.
$json = file_get_contents("composer.json");
$round = json_decode($json,true);

$oggi = date("D");

//inserisco un modo per andare avanti di un giorno visto che la spazzatura la ritirano la mattina presto
//e la scendo prima di dormire

$domani =  $weekDayN[$oggi]+1;
if ($domani>6){
$domani=1;
};
$domani = $weekDay[$domani];


//echo "<br>".$round["Mon"];;

//la funzione di stampa finale inserire quando il prefisso e l'array con i turni
function WriteW($quando,$pre="",$round){
  switch ($quando) {
    case 'Mon':
      return $pre.$round["Mon"];
      break;
    case 'Tue':
      return $pre.$round["Tue"];
      break;
    case 'Wed':
      return $pre.$round["Wed"];
      break;
    case 'Thu':
      return $pre.$round["Thu"];
      break;
    case 'Fri':
      return $pre.$round["Fri"];
      break;
    case 'Sat':
      return $pre.$round["Sat"];
      break;
    case 'Sun':
      return $pre."non si effettua la raccolta differenziata";
      break;

    default:
      return "Si è verificato un errore, il parametro dato a WriteW non è corretto";
      break;
  };
};

//presentazione oggi e domani

echo WriteW($oggi,"Stanotte hanno ritirato ",$round);
echo " ⟺ ";
echo WriteW($domani,"Domattina ritireranno ",$round);


//presentazione Settimana
echo "<br>----------------------------------------------------------------------------------------------------------------------------------------------------<br>";

foreach ($round as $key => $value) {
  echo "<br>$weekDayIta[$key] $value<br>";
};

echo "<br>----------------------------------------------------------------------------------------------------------------------------------------------------<br>";





 ?>

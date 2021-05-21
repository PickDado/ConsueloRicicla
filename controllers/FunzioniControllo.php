<?php

//creo una funzione che mi aiuti a scrivere in modo automatico il testo
//Quando avviene, il prefisso, e l'array da cui estrarre
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


//Controllo per funzione oggi e domani, la raccolta avviene durante le prime ore del mattino quindi è utile per capire
//cosa scendere.
$domani =  $weekDayN[$oggi]+1;

if ($domani>6){
$domani=1;
};
$domani = $weekDay[$domani];
 ?>

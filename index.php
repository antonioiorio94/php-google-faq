<!--
  Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
Mi raccomando di gestire per prima cosa la visualizzazione dei dati, anche in maniera grezza, e solo alla fine rendere più accattivante la pagina.
-->

<?php   

include 'data.php';

foreach ($faqs as $faq){
  foreach($faq as $key => $paragraph){

    if($key == "question"){
      echo('<h1>' . $paragraph . '</h2>');
    }elseif($key == "answer"){
      echo('<p>' . $paragraph . '</p>');
    }
  }
};

?>
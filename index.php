<!--
  Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
Mi raccomando di gestire per prima cosa la visualizzazione dei dati, anche in maniera grezza, e solo alla fine rendere più accattivante la pagina.
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Google Faq</title>
</head>
<body>

  <header>
    <div class="container">
      <img src="img\Google__G__Logo.svg.webp" alt="Logo">
    </div>

    <nav>
      <ul class="navigation">
        <li><a href="#">Introduzione</a></li>
        <li><a href="#">Norme sulla privacy</a></li>
        <li><a href="#">Termini di serviizio</a></li>
        <li><a href="#">Tecnologie</a></li>
        <li><a href="#">Domande frequenti</a></li>
      
      </ul>
    </nav>

    <main>
      <div class="main_container">
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

      </div>
    </main>
  </header>
  
</body>
</html>


<?php
require_once __DIR__ . '/movie.php';

// Creazione degli oggetti Movie1 e Movie2
$movie1 = new Movie("Il Segreto di Luna", "Un misterioso viaggio alla scoperta dei segreti nascosti nella notte di Luna.", "Italiano", new DateTime('2022-05-15'));
$movie2 = new Movie("Beyond the Stars", "Un'avventura epica nello spazio profondo alla ricerca di un nuovo mondo abitabile.", "Inglese", new DateTime('2023-08-10'));
$movie3 = new Movie("Barbie", "Segui Barbie nella sua avventura nel mondo reale", "Inglese", new DateTime('2023-07-21'));

echo "Movie1: Titolo: " . $movie1->title . ", " . "descrizione: " . $movie1->description . ", Lingua - " . $movie1->language . ", Data di uscita - " . $movie1->release_date->format('Y-m-d') . "\n";
echo "Movie2: Titolo: " . $movie2->title . ", " . "descrizione: " . $movie2->description . ", Lingua - " . $movie2->language . ", Data di uscita - " . $movie2->release_date->format('Y-m-d') . "\n";
echo "Movie3: Titolo: " . $movie3->title . ", " . "descrizione: " . $movie3->description . ", Lingua - " . $movie3->language . ", Data di uscita - " . $movie3->release_date->format('Y-m-d') . "\n";


$movies = array($movie1, $movie2, $movie3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <title>Php-Movies</title>
</head>
<body>
  <header class="bg-primary pt-2 pb-2">
    <div class="container text-center text-white">
      <h1>Movies - dei povery</h1>
    </div>
  </header>
  <main>
    <div class="container">
  
    </div>
  </main>
</body>
</html>
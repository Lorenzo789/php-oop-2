
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    <!-- Descrizione
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->
    <h1>PHP OOP 2</h1>
</body>
</html>

<?php
    include __DIR__ . '/classes/product.php';
    include __DIR__ . '/classes/dogHouse.php';
    include __DIR__ . '/classes/food.php';

    $prodotto = new Product('palla', 59, 5);
    var_dump($prodotto);
    
    $cucciagrande = new DogHouse('cuccia', 90, 10, 'cemento', '50cm');
    var_dump($cucciagrande);

    $cibo = new Food('crocchette', 60, 8.5, '10kg', 'cat', 'vongole', 'verdure', 'coniglio', 'ricci di mare');
    var_dump($cibo);

?>
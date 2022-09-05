
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
    include __DIR__ . '/classes/toy.php';
    include __DIR__ . '/classes/user.php';
    include __DIR__ . '/classes/registeredUser.php';
    include __DIR__ . '/classes/card.php';
    include __DIR__ . '/classes/shoppingCart.php';
    
    $cucciagrande = new DogHouse('cuccia', 90, 10, 'cemento', '50cm');
    var_dump($cucciagrande);

    $cibo = new Food('crocchette', 60, 8.5, '10kg', 'cat', 'vongole', 'verdure', 'coniglio', 'ricci di mare');
    var_dump($cibo);

    $card1 = new Card('guest', '1111222233334444', 100, 445, '22/04/23');
    $card2 = new Card('piero fame', '5555666677778888', 100, 558, '30/07/28');

    $guest = new User($card1, 'guest');
    $piero = new RegisteredUser('piero', $card2, 'pfame', 'password', 'via delle cipolle 34');
    var_dump($piero);

    $cartGuest = new ShoppingCart($cucciagrande, $guest);
    var_dump($cartGuest);

    $cartPiero = new ShoppingCart($cucciagrande, $piero);
    var_dump($cartPiero);

    var_dump($cartPiero->getCartTotal($cucciagrande, $piero, $card2));

?>
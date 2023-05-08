<?php

require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cucce.php';
require_once __DIR__ . '/Models/Giochi.php';

$prodotti = [
    $cuccia1 = new Cucce('Cuccia bella', 'Cucce', 'cane', 'L', 'Verde'),
    $cibo1 = new Cibo('Cibo Buono', 'Cibo', 'gatto', '4kg', 'cibo secco', '1-4 anni'),
    $gioco1 = new Giochi('Gioco Bello', 'Giochi', 'cane', 'gomma')
];

try {
    $cuccia1 ->setPrezzo(30);
} catch (Exception $e) {

}
try {
    $cibo1 ->setPrezzo(10);
} catch (Exception $e) {

}
try {
    $gioco1 ->setPrezzo(20);
} catch (Exception $e) {

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) { ?>

                <div class="col-4 ">
                    <div class="card " style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="foto casuale">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $prodotto->nome ?> </h5>
                            <p>Prezzo: <?php if(is_int($prodotto-> prezzo)){
                             echo $prodotto->prezzo; 
                             }else{
                                echo "Si è verificato un errore sul prodotto: " . $e->getMessage();
                             } ?> </p>
                            
                            <p>Categoria: <?php echo $prodotto->categoria ?> </p>
                            <?php if ($prodotto->animale == 'cane') {
                                echo '<i class="fa-solid fa-dog "></i>';
                            } else {
                                echo '<i class="fa-solid fa-cat"></i>';
                            } ?>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>
</head>

<body>

</body>

</html>
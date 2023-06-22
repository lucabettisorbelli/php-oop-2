<?php

require __DIR__ . "/models/Gioco.php";
require __DIR__ . "/models/Cuccia.php";
require __DIR__ . "/models/Cibo.php";
require_once __DIR__ . "/traits/sconto.php";
class Product
{
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;

    public function __construct($nome, $prezzo, $immagine, $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}



$prodotti = [
    new Cibo("Crocchette per cani", 10.99, "https://rsbackend.blob.core.windows.net/product/Crocchette-per-cani-Special-Dog-Monge_8d19bdcffa118d9.jpeg", "Per cani", 15),
    new Gioco("Palla da tennis", 4.99, "https://static.zoomalia.com/prod_img/73480/lm_8214558dbb6f6f8bb2e16d03b85bde76e2c1594643614.jpg", "Per cani", "Gomma"),
    new Cuccia("Cuccia per gatti", 29.99, "https://immagini.qualescegliere.it/articoli/2019/10/cuccia-per-gatti-da-esterni.jpg", "Per gatti", "40x40x70cm")
];

foreach ($prodotti as $prodotto) {
    $prodotto->applicaScontoCani();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php

    echo "<div class='container'>";
    foreach ($prodotti as $prodotto) {
        echo "<div class='card'>";
        echo "<img src='" . $prodotto->immagine . "' alt='" . $prodotto->nome . "'>";
        echo "<h2>" . $prodotto->nome . "</h2>";
        echo "<p>Prezzo: " . number_format($prodotto->prezzo, 2) . "€</p>";
        echo "<p>Categoria: " . $prodotto->categoria . "</p>";
        if ($prodotto instanceof Cibo) {
            echo "<p>Peso: " . $prodotto->peso . "kg</p>";
        } elseif ($prodotto instanceof Gioco) {
            echo "<p>Materiale: " . $prodotto->materiale . "</p>";
        } elseif ($prodotto instanceof Cuccia) {
            echo "<p>Dimensioni: " . $prodotto->dimensioni . "</p>";
        }
        echo "<p>Tipo: " . get_class($prodotto) . "</p>";
        echo "</div>";
    }
    echo "</div>"

    ?>


</body>

</html>
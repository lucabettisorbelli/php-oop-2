<?php


require_once __DIR__ . "/../traits/sconto.php";

class Cibo extends Prodotto
{
    public $peso;

    public function __construct($nome, $prezzo, $immagine, $categoria, $peso)
    {
        parent::__construct($nome, $prezzo, $immagine, $categoria);
        $this->peso = $peso;
    }
}

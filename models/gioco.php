<?php

require_once __DIR__ . "/../traits/sconto.php";


class Gioco extends Prodotto
{
    public $materiale;

    public function __construct($nome, $prezzo, $immagine, $categoria, $materiale)
    {
        parent::__construct($nome, $prezzo, $immagine, $categoria);
        $this->materiale = $materiale;
    }
}

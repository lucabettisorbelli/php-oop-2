<?php

class Cuccia extends Prodotto
{
    public $dimensioni;

    public function __construct($nome, $prezzo, $immagine, $categoria, $dimensioni)
    {
        parent::__construct($nome, $prezzo, $immagine, $categoria);
        $this->dimensioni = $dimensioni;
    }
}

<?php

class Prodotto
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

    public function stampaCard()
    {
        echo "<div class='card'>";
        echo "<img src='" . $this->immagine . "' alt='" . $this->nome . "'>";
        echo "<h2>" . $this->nome . "</h2>";
        echo "<p>Prezzo: " . $this->prezzo . "€</p>";
        echo "<p>Categoria: " . $this->categoria . "</p>";
        echo "<p>Tipo: " . get_class($this) . "</p>";
        echo "</div>";
    }
}

<?php

trait Sconto
{
    public function applicaSconto($percentuale)
    {
        $this->prezzo -= $this->prezzo * $percentuale / 100;
    }
}

class ProdottoNonTrovatoException extends Exception
{
}

class Prodotto
{
    use Sconto;

    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;

    public function __construct($nome, $prezzo, $immagine, $categoria)
    {
        if (!$nome) {
            throw new ProdottoNonTrovatoException("Prodotto non trovato");
        }

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function applicaScontoCani()
    {
        if ($this->categoria == 'Per cani') {
            $this->applicaSconto(20);
        }
    }
}

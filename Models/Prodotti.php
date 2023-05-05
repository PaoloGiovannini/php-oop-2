<?php
Class Prodotti {
    public $nome;
    public $prezzo;

    public $categoria;

    public $animale;

    public function __construct($nome, $prezzo, $categoria, $animale){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->animale = $animale;
    }
}
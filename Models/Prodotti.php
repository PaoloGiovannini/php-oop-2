<?php
require_once __DIR__ . '/../Traits/Prezzo.php';
Class Prodotti {
    use Prezzo;
    public $nome;

    public $categoria;

    public $animale;

    public function __construct($nome, $categoria, $animale){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->animale = $animale;
    }
}
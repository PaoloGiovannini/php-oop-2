<?php
    class Cucce extends Prodotti {
        public $dimensione;
        public $colore;
    
        public function __construct($nome, $prezzo, $categoria, $animale, $dimensione, $colore) {
            parent::__construct($nome, $prezzo, $categoria, $animale);
            $this->dimensione = $dimensione;
            $this->colore = $colore;
        }
    }
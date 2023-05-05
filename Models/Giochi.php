<?php
    class Giochi extends Prodotti {
        public $materiale;
    
        public function __construct($nome, $prezzo, $categoria, $animale, $materiale,) {
            parent::__construct($nome, $prezzo, $categoria, $animale);
            $this->materiale = $materiale;
        }
    }
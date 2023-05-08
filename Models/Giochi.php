<?php
    class Giochi extends Prodotti {
        public $materiale;
    
        public function __construct($nome, $categoria, $animale, $materiale,) {
            parent::__construct($nome, $categoria, $animale);
            $this->materiale = $materiale;
        }
    }
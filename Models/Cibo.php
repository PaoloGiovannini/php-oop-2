<?php
    class Cibo extends Prodotto {
        public $peso;
        public $tipo_cibo;
        public $eta;
    
        public function __construct($nome, $categoria, $animale, $peso, $tipo_cibo, $eta) {
            parent::__construct($nome, $categoria, $animale);
            $this->peso = $peso;
            $this->tipo_cibo = $tipo_cibo;
            $this->eta = $eta;
        }
    }
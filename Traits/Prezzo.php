<?php

trait Prezzo {
    public $prezzo;

    public function setPrezzo($prezzo) {
        if (is_int($prezzo)) {
            $this->prezzo = $prezzo;
        } else {
            throw new Exception('prezzo non valido');
        }
        
    }

}
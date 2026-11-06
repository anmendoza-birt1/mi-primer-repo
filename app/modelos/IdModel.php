<?php

namespace app\modelos;

class IdModel {
    
    private int $id;

    public function __construct(string $id) {
        $this->id = intval(value: $id);
    }
}

?>
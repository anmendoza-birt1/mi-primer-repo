<?php

namespace app\controladores;

use app\modelos\IdModel;

class IdController{
    public function convertir(string $id): IdModel{
        $idModel = new IdModel(id: $id);
        return $idModel;
    }
}
?> 
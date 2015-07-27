<?php define('SYSPATH') or die('No direct script access allowed.');

class Model_Entrada extends ORM {
    public function rules() {
        return array(
            'cantidad' => array(),
            'caducidad' => array(),
            'lote' => array(),
            'no_registro' => array(),
            'fecha_entrada' => array(),
            'observaciones' => array(),
        );
    }
}

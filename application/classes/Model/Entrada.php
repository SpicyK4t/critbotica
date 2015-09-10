<?php defined('SYSPATH') or die('No direct script access allowed.');

class Model_Entrada extends ORM {
    public function rules() {
        return array(
            'cantidad' => array(
                array('not_empty'),
                array('digit'),
            ),
            'caducidad' => array(
                array('not_empty'),
                array('date'),
            ),
            'lote' => array(
                array('not_empty'),
                array('min_length', array(':value', 6)),
                array('max_length', array(':value', 20)),
            ),
            'no_registro' => array(
                array('not_empty'),
                array('min_length', array(':value', 6)),
                array('max_length', array(':value', 20)),
            ),
            'fecha_entrada' => array(
                array('not_empty'),
                array('date'),
            ),
            'observaciones' => array(
            ),
        );
    }

    protected $_belongs_to = array(
        'medicamento' => array(),
        'user' => array(),
    );
}

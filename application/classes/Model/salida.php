<?php defined('SYSPATH') or die('No direct script access allowed.');

class Model_Salida extends ORM {

    public function rules() {
        return array(
            'cantidad' => array(
                array('not_empty'),
                array('digit'),
            ),
            'fecha_salida' => array(
                array('not_empty'),
                array('date'),
            ),
            'observaciones' => array(

            ),
        );
    }

    protected $_belongs_to = array(
        'entrada'  => array(),
        'user' => array(),
        'doctor' => array(),
        'paciente' => array(),
    );
}

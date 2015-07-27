<?php define('SYSPATH') or die('No direct script access allowed.');

class Model_Paciente extends ORM {
    public function rules() {
        return Array(
            'nombre_paciente' => array(
                array('not_empty'),
                array('min_length', array(':value'), 4),
                array('max_length', array(':value', 36)),
            ),
            'apellido_paciente' => array(
                array('not_empty'),
                array('min_length', array(':value'), 4),
                array('max_length', array(':value', 36)),
            ),
            'carnet' => array(
                array('not_empty'),
                array('min_length', array(':value'), 4),
                array('max_length', array(':value', 45)),
            ),
            'nombre_tutor' => array(
                array('not_empty'),
                array('min_length', array(':value'), 4),
                array('max_length', array(':value', 36)),
            ),
            'apellido_tutor' => array(
                array('not_empty'),
                array('min_length', array(':value'), 4),
                array('max_length', array(':value', 36)),
            ),
        );
    }
}
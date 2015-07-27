<?php define('SYSPATH') or die('No direct script access allowed.');

class Model_Doctor extends ORM {
    public function rules() {
        return array(
           'nombre_doctor' => array(
               array('not_empty'),
               array('min_length', array(':value'), 4),
               array('max_length', array(':value', 36)),
            ),
            'apellido_doctor' => array(
               array('not_empty'),
               array('min_length', array(':value'), 4),
               array('max_length', array(':value', 36)),
            ),
        );
    }
}
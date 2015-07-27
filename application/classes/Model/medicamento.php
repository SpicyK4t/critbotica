<?php define('SYSPATH') or die('No direct script access allowed.');

class Model_Medicamento extends ORM {
    public function rules() {
        return array(
            'nombre_distintivo' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 35)),
            ),
            'nombre_generico' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 50)),
            ),
            'presentacion' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 20)),
            ),
            'stock_minimo' => array(
                array('not_empty'),
                array('digit'),
            ), 
            'grupo' => array(
                array('not_empty'),
                array('digit'),
            ),
            'habilitado' => array(
                array('not_empty'), 
                array('digit'),
            ),
        );
    }
    
    protected $_belongs_to = array(
        'user' => array(),
    );
}
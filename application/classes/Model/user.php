<?php define('SYSPATH') or die('No direct script access allowed.');

class Model_User extends Model_Auth_User {
    public function rules() {
        return array(
            'email' => array(
                array('not_empty'), 
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 254)),                
                array('email'),
            ),
            'username' => array(
                array('not_empty'), 
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
                array(array($this, 'username_available')),
            ),
            'password' => array(
                array('not_empty'),
                array('min_length', array(':value', 6)),
            ),
            'logins' => array(
                array('digit'),
            ),
            'last_login' => array(
                array('digit'),
            ),
            'nombre' => array(                
                array('not_empty'), 
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 45)),
            ),
            'apellido' => array(
                array('not_empty'), 
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 70)),
            ),
            'habilitado' => array(
                array('not_empty'), 
                array('digit'),
            )
        );
    }
}
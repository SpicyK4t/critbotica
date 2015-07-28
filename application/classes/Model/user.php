<?php defined('SYSPATH') or die('No direct script access allowed.');

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
                array('digit'),
            )
        );
    }
    public function username_available($username) {        
        return !(ORM::factory('user', array('username' => $username))->loaded());        
    }
    
}
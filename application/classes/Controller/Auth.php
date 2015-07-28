<?php defined('SYSPATH') or die('Not direct script access.');
    
class Controller_Auth extends Controller_Template {
    
    public $template = 'base';
    
    public function action_login() {
        $this->template->contenido = View::factory('Auth/login');
    }
}
<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Home extends Controller {
    
    public function action_index() {
        $this->response->body('Home Page');
    }
    
    public function action_install() {
        $user = ORM::factory('user');
        $user->email = "admin@admin.com";
        $user->username = "webadmin";
        $user->password = "webadmin";
        $user->nombre = "Administrador";
        $user->apellido = "Website";        
        $user->save();
        $role = ORM::factory('role')->where('name', '=', 'login')->find();
        $user->add('roles', $role);
        $user->save();
    }
}
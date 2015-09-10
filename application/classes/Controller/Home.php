<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Home extends Controller_Template {

    public $template = 'base';

    public function action_index()
    {
        if(Auth::instance()->logged_in())
        {
            if(Auth::instance()->get_user()->habilitado)
            {
                $this->template->menu = View::factory('Auth/barra_usuario');
                $this->template->contenido = View::factory('Home/dashboard');
            }
            else
            {
                HTTP::redirect('/Auth/disable/');
            }
        }
        else
            HTTP::redirect('/Auth/login/');
    }

    public function action_install()
    {
        $user = ORM::factory('User');
        $user->email = 'admin@hotmail.com';
        $user->username = 'webadmin';
        $user->password = 'webadmin';
        $user->nombre = 'Administrador';
        $user->apellido = 'Website';
        $user->save();

        $role = ORM::factory('Role')->where('name', '=', 'login')->find();
        $user->add('Roles', $role);
        $role = ORM::factory('Role')->where('name', '=', 'admin')->find();
        $user->add('Roles', $role);

        $user->save();

        $this->template->menu = '';
        $this->template->contenido = 'Instalado';
    }
}

<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Home extends Controller_Template {

    public $template = 'base';

    public function action_index()
    {
        if(Auth::instance()->logged_in())
        {
            if(Auth::instance()->get_user()->habilitado)
            {
                $this->template->menu = View::factory('menu');
                $this->template->scripts = View::factory('Medicamento/scripts');
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
        $user = ORM::factory('user');
        $user->email = 'admin@hotmail.com';
        $user->username = 'webadmin';
        $user->password = 'webadmin';
        $user->nombre = 'Administrador';
        $user->apellido = 'Website';
        $user->save();

        $role = ORM::factory('role')->where('name', '=', 'login')->find();
        $user->add('roles', $role);
        $role = ORM::factory('role')->where('name', '=', 'admin')->find();
        $user->add('roles', $role);

        $user->save();

        $this->template->menu = '';
        $this->template->contenido = 'Instalado';
    }

    public function action_pruebapass() {
      $this->template->contenido = Auth::instance()->hash_password('webadmin');

   }
}

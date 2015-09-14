<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_User extends Controller_Template {
    public $template = 'base';

    public function action_index()
    {
        if(Auth::instance()->logged_in('admin') &&
           Auth::instance()->get_user()->habilitado)
        {
            $users = ORM::factory('user')->find_all();

            $view = View::factory('User/index');
            $view->users = $users;

            $this->template->contenido = $view;
            $this->template->menu = "";
        }
        else
            HTTP::redirect('/Auth/login/');
    }

    public function action_new()
    {
        if(Auth::instance()->logged_in('admin') &&
          Auth::instance()->get_user()->habilitado)
        {
            $usuario = ORM::factory('user');

            $view = View::factory('User/form')
                ->bind('errors', $errors);

            if(http_request::POST == $this->request->method())
            {
                $usuario = ORM::factory('user')->values(
                    $_POST, array('username', 'email', 'password', 'nombre', 'apellido'));

                try
                {
                    $usuario->save();

                    $role = ORM::factory('role')->where('name', '=', 'login')->find();
                    $nuevo_usuario->add('roles', $role);
                    $nuevo_usuario->save();

                    HTTP::redirect('/User/');
                }
                catch(ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('Models');
                }
            }

            $view->usuario = $usuario;
            $this->template->contenido = $view;
            $this->template->menu = "";
        }
        else
            HTTP::redirect('/Auth/login/');
    }

    public function action_edit()
    {
        if(Auth::instance()->logged_in('admin') &&
          Auth::instance()->get_user()->habilitado)
        {
            $id = $this->request->param('id');
            $usuario = ORM::factory('user', $id);

            $view = View::factory('User/form')
                ->bind('errors', $errors);

            if(http_request::POST == $this->request->method())
            {
                $usuario->values($_POST, array('username', 'email', 'nombre', 'apellido'));

                try
                {
                    $usuario->save();
                    HTTP::redirect('/User/');
                }
                catch(ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('Models');
                }
            }


            $view->usuario = $usuario;
            $this->template->contenido = $view;
            $this->template->menu = "";
        }
        else
            HTTP::redirect('/Auth/login/');
    }

    public function action_delete()
    {
        if(Auth::instance()->logged_in('admin') &&
           Auth::instance()->get_user()->habilitado)
        {
            $id = $this->request->param('id');
            $usuario = ORM::factory('user', $id);
            $usuario->habilitado = 0;
            $usuario->save();
            HTTP::redirect('/User/');
        }
        else
            HTTP::redirect('/Auth/login/');
    }

    public function action_habilitar()
    {
        if(Auth::instance()->logged_in('admin') &&
           Auth::instance()->get_user()->habilitado)
        {
            $id = $this->request->param('id');
            $usuario = ORM::factory('user', $id);
            $usuario->habilitado = 1;
            $usuario->save();
            HTTP::redirect('/User/');
        }
        else
            HTTP::redirect('/Auth/login/');
    }
}

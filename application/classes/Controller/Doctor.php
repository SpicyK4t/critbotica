<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Doctor extends Controller_Template {
    public $template = 'base';

    public function action_index()
    {
        if(Auth::instance()->get_user()->habilitado)
        {
            $doctores = ORM::factory('Doctor')->find_all();

            $view = View::factory('Doctor/index');
            $view->doctores = $doctores;

            $this->template->contenido = $view;
            $this->template->menu = View::factory('menu');
        }
        else
            HTTP::redirect('/Auth/login/');
    }

    public function action_new()
    {
        if(Auth::instance()->get_user()->habilitado)
        {
            $doctor = ORM::factory('Doctor');

            $view = View::factory('Doctor/form')
                ->bind('errors', $errors);

            if(http_request::POST == $this->request->method())
            {
                $doctor = ORM::factory('Doctor')->values($_POST, array('nombre_doctor', 'apellido_doctor'));
                try
                {
                    $doctor->save();
                    HTTP::redirect('/Doctor/');
                }
                catch(ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('Models');
                }
            }

            $view->doctor = $doctor;
            $this->template->contenido = $view;
            $this->template->menu = View::factory('menu');
        }
        else
            HTTP::redirect('/Auth/login/');
    }

    public function action_edit()
    {
        if(Auth::instance()->get_user()->habilitado)
        {
            $id = $this->request->param('id');
            $doctor = ORM::factory('Doctor', $id);

            $view = View::factory('Doctor/form')
                ->bind('errors', $errors);

            if(http_request::POST == $this->request->method())
            {
                $doctor->values($_POST, array('nombre_doctor', 'apellido_doctor'));

                try
                {
                    $doctor->save();
                    HTTP::redirect('/Doctor/');
                }
                catch(ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('Models');
                }
            }

            $view->doctor = $doctor;
            $this->template->contenido = $view;
            $this->template->menu = View::factory('menu');
        }
        else
            HTTP::redirect('/Auth/login/');
    }
}

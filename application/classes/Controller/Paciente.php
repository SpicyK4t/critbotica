<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Paciente extends Controller_Template {
    public $template = 'base';

    public function action_index()
    {
        if(Auth::instance()->get_user()->habilitado)
        {
            $pacientes = ORM::factory('Paciente')->find_all();

            $view = View::factory('Paciente/index');
            $view->pacientes = $pacientes;

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
            $paciente = ORM::factory('Paciente');

            $view = View::factory('Paciente/form')
                ->bind('errors', $errors);

            if(http_request::POST == $this->request->method())
            {
                $paciente = ORM::factory('Paciente')->values($_POST,
                  array('nombre_paciente', 'apellido_paciente', 'carnet',
                  'nombre_tutor', 'apellido_tutor'));
                try
                {
                    $paciente->save();
                    Http::redirect('/paciente/');
                }
                catch (ORM_Validation_Exception $e) {
                    $errors = $e->errors('Models');
                }
            }
            $view->paciente = $paciente;
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
            $paciente = ORM::factory('Paciente', $id);

            $view = View::factory('Paciente/form')
              ->bind('errors', $errors);

            if(http_request::POST == $this->request->method())
            {
                $paciente->values($_POST,
                  array('nombre_paciente', 'apellido_paciente', 'carnet',
                  'nombre_tutor', 'apellido_tutor'));

                try
                {
                    $paciente->save();
                    Http::redirect('/paciente/');
                }
                catch(ORM_Validation_Exception $e)
                {
                    $errors = $e->errors('Models');
                }
            }
            $view->paciente = $paciente;
            $this->template->contenido = $view;
            $this->template->menu = View::factory('menu');
        }
        else
            HTTP::redirect('/Auth/login/');
    }
}

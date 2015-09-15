<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Salida extends Controller_Template {
   public $template = 'base';

   public function action_index()
   {
      if(Auth::instance()->get_user()->habilitado)
      {
         $salidas = ORM::factory('Salida')->find_all();

         $view = View::factory('Salida/index');
         $view->salidas = $salidas;

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
         $salida = ORM::factory('Salida');

         $view = View::factory('Salida/form')
            ->bind('errors', $errors);

         if(http_request::POST == $this->request->method())
         {
            $salida = ORM::factory('Salida')->values($_POST, array('cantidad', 'fecha_salida', 'observaciones'));

            $salida->entrada_id = $this->request->post('entrada');
            $salida->user = Auth::instance()->get_user();
            $salida->doctor_id = $this->request->post('doctor');
            $salida->paciente_id = $this->request->post('paciente');

            try
            {
               $salida->save();
               HTTP::redirect('/salida/');

            }
            catch (ORM_Validation_Exception $e)
            {
               $errors = $e->errors('Models');
            }
         }

         $entradas = '';
         $doctores = ORM::factory('Doctor')
            ->find_all()->as_array('id', 'nombre_doctor');
         $pacientes = '';

      }
      else
         HTTP::redirect('/Auth/login/');
   }

   public function action_edit()
   {
      if(Auth::instance()->get_user()->habilitado)
      {

      }
      else
         HTTP::redirect('/Auth/login/');
   }
}

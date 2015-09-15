<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Entrada extends Controller_Template {
   public $template = 'base';

   public function action_index()
   {
      if(Auth::instance()->get_user()->habilitado)
      {
         $entradas = ORM::factory('Entrada')->find_all();

         $view = View::factory('Entrada/index');
         $view->entradas = $entradas;

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
         $entrada = ORM::factory('Entrada');

         $view = View::factory('Entrada/form')
            ->bind('errors', $errors);

         if(http_request::POST == $this->request->method())
         {
            $entrada = ORM::factory('Entrada')->values($_POST,
                  array('cantidad', 'caducidad', 'lote', 'no_registro',
                        'fecha_entrada', 'observaciones'));

            $entrada->medicamento_id = $this->request->post('medicamento');
            $entrada->user = Auth::instance()->get_user();

            try
            {
               $entrada->save();
               HTTP::redirect('/entrada/');
            }
            catch(ORM_Validation_Exception $e)
            {
               $errors = $e->errors('Models');
            }
         }

         $medicamentos = ORM::factory('Medicamento')
            ->where('habilitado', '=', 1)->find_all()->as_array('id', 'nombre_distintivo');

         $view->entrada =$entrada;
         $view->medicamentos = $medicamentos;
         $this->template->contenido = $view;
         $this->template->scripts = View::factory('Medicamento/scripts');
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
         $entrada = ORM::factory('Entrada', $id);

         $view = View::factory('Entrada/form')
            ->bind('errors', $errors);

         if(http_request::POST == $this->request->method())
         {
            $entrada->values($_POST, array('cantidad', 'caducidad', 'lote', 'no_registro',
                  'fecha_entrada', 'observaciones'));

            $entrada->medicamento_id = $this->request->post('medicamento');
            $entrada->user = Auth::instance()->get_user();

            try
            {
               $entrada->save();
               HTTP::redirect("/entrada/");
            }
            catch (ORM_Validation_Exception $e)
            {
               $errors = $e->errors('Models');
            }
         }

         $medicamentos = ORM::factory('Medicamento')
            ->where('habilitado', '=', 1)->find_all()->as_array('id', 'nombre_distintivo');

         $view->entrada =$entrada;
         $view->medicamentos = $medicamentos;
         $this->template->contenido = $view;
         $this->template->scripts = View::factory('Medicamento/scripts');
         $this->template->menu = View::factory('menu');
      }
      else
         HTTP::redirect('/Auth/login/');
   }
}

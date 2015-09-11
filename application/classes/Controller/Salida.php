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
         $this->template->menu = '';
      }
      else
         HTTP::redirect('/Auth/login/');
   }

   public function action_new()
   {
      if(Auth::instance()->get_user()->habilitado)
      {
         
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

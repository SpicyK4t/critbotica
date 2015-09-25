<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_Salida extends Controller_Template {
   public $template = 'base';

   public function action_index()
   {
      if(Auth::instance()->get_user()->habilitado)
      {
         $view = View::factory('Salida/index');
         $id = $this->request->param('id');
         if($id) {
             $salidas = ORM::factory('Salida')
                ->join('entradas', 'INNER')
                ->on('salida.entrada_id', '=', 'entradas.id')
                ->where('entradas.medicamento_id', '=', $id)
                ->find_all();
             $view->medicamento = ORM::factory('Medicamento', $id);
         }
         else {
             $salidas = ORM::factory('Salida')->find_all();
         }


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

   public function action_registro() {
       if(Auth::instance()->get_user()->habilitado) {
           $salida = ORM::factory('Salida');
           $medicamento_id = $this->request->param('id');
           $medicamento = ORM::factory('Medicamento', $medicamento_id);
           $vista = View::factory('Salida/form_med_salida')->bind('errors', $errors);

           if(http_request::POST == $this->request->method()) {
               $cantidades_medicamento = DB::select()
                    ->from('entradas_salidas_restantes')
                    ->where('medicamento_id', '=', $medicamento_id)
                    ->order_by('caducidad', 'ASC')
                    ->execute()->as_array();

               $cantidad_salida = $this->request->post('cantidad');

               foreach ($cantidades_medicamento as $cant_medicamento) {

                   $cantidad_restante_med = $cant_medicamento['restante'];

                   if($cantidad_restante_med < $cantidad_salida) {

                       $salida = ORM::factory('Salida');
                       $salida->cantidad = $cantidad_restante_med;
                       $salida->fecha_salida = $this->request->post('fecha_salida');
                       $salida->observaciones = $this->request->post('observaciones');
                       $salida->entrada_id = $cant_medicamento['id'];
                       $salida->user_id = Auth::instance()->get_user()->id;
                       $salida->doctor_id = $this->request->post('doctor');
                       $salida->paciente_id = $this->request->post('paciente');

                       try {
                          $salida->save();
                          $cantidad_salida = $cantidad_salida - $cantidad_restante_med;
                       }
                       catch(ORM_Validation_Exception $e) {
                           $errors = $e->errors('Models');
                       }

                       /// Hay menos medicamento en esa entrada del que se esta retirando
                       // se retira hasta quedar en 0 y se pasa a la siguiente entrada
                   }
                   else if($cantidad_restante_med >= $cantidad_salida) {

                       $salida = ORM::factory('Salida');
                       $salida->cantidad = $cantidad_salida;
                       $salida->fecha_salida = $this->request->post('fecha_salida');
                       $salida->observaciones = $this->request->post('observaciones');
                       $salida->entrada_id = $cant_medicamento['id'];
                       $salida->user_id = Auth::instance()->get_user()->id;
                       $salida->doctor_id = $this->request->post('doctor');
                       $salida->paciente_id = $this->request->post('paciente');

                       try {
                          $salida->save();
                          HTTP::redirect('/');
                       }
                       catch(ORM_Validation_Exception $e) {
                           $errors = $e->errors('Models');
                       }
                       // Se retira el medicamento y se termina el ciclo
                       break;
                   }
               }

           }
           else {
               $salida->fecha_salida = date('Y-m-d');
           }

           $vista->doctores = DB::select()
                 ->from('doctors_nombrecompleto')
                 ->execute()
                 ->as_array('id', 'nombre_completo');
           $vista->pacientes = DB::select()
                 ->from('pacientes_nombrecompleto')
                 ->execute()
                 ->as_array('id', 'nombre_completo');
           $vista->medicamento = $medicamento;
           $vista->salida = $salida;

           $this->template->contenido = $vista;
           $this->template->menu = View::factory('menu');
           $this->template->scripts = View::factory('Salida/scripts');
       }
       else {
           HTTP::redirect('/Auth/login/');
       }
   }
}

   <?php defined('SYSPATH') or die('No direct script access');

   class Controller_Medicamento extends Controller_Template {
      public $template = 'base'

      public function action_index() {
         if(Auth::instance()->get_user()->habilitado)
         {
            $medicamentos = ORM::factory('medicamento')->find_all();

            $view = View::factory('Medicamento/index');
            $view->medicamentos = $medicamentos;

            $this->template->contenido = $view;
            $this->template->menu = "";
         }
         else
            HTTP::redirect('/Auth/login/');
      }

      public function action_new() {
         if(Auth::instance()->get_user()->habilitado)
         {
            $medicamento = ORM::factory('medicamento');

            $view = View::factory('Medicamento/form')
               ->bind('errors', $errors);

            if(http_request::POST == $this->request->method())
            {
               $medicamento = ORM::factory('medicamento')->values($_POST,
                  array('nombre_distintivo', 'nombre_generico', 'presentacion',
                        'stock_minimo', 'grupo'));

               $medicamento->user = Auth::instance()->get_user();
               //$medicamento->add('user', Auth::instance()->get_user());

               if(isset($_FILES['imagen']) &&
                  Upload::not_empty($_FILES['imagen']))
               {
                  $file_name = $this->save_image($_FILES['imagen']);
                  $medicamento->imagen_medicamento = $file_name;
               }
               else
                  $medicamento->imagen_medicamento = $this->request->post('imagen_medicamento');
               try
               {
                  $medicamento->save();
                  HTTP::redirect("/medicamento/");
               }
               catch(ORM_Validation_Exception $e)
               {
                  $errors = $e->errors('Models');
               }
            }

            $view->$medicamento = $medicamento;
            $this->template->contenido = $view;
            $this->temaplte->menu = "";
         }
         else
            HTTP::redirect('/Auth/login/');
      }

      protected function save_image($image)
      {
         if(
            !Upload::valid($image) OR
            !Upload::not_empty($image) OR
            !Upload::type($image, array('jpg', 'jpeg', 'png')))
         {
            return FALSE;
         }
         else {
            $directory = DOCROOT.'media/img/';
            if($file = Upload::save($image, NULL, $directory))
            {
               $filename = strtolower(Text::random('alnum', 20)).'.jpg';

               Image::factory($file)
                  ->resize(215, 165, Image::AUTO)
                  ->save($directory.$filename);

               unlink($file);

               return $filename;
            }
            return FALSE
         }
      }
   }

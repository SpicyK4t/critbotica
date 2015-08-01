<?php defined('SYSPATH') or die('Not direct script access.');
    
class Controller_Auth extends Controller {
    
    public function action_login() 
    {   
        if(!Auth::instance()->logged_in()) 
        {
            if (HTTP_Request::POST == $this->request->method())
            {           
                $username = $this->request->post('username');
                $password = $this->request->post('password');
                $remember = $this->request->post('remember');
                
                if(Auth::instance()->login($username, $password)) 
                {
                    $user = Auth::instance()->get_user();
                    if($user->habilitado) 
                        HTTP::redirect('/Home/');
                    else
                        HTTP::redirect('/Auth/disable/');
                }
            }
            
            $base = View::factory('Auth/base');
            $formulario = View::factory('Auth/login');

            $base->contenido = $formulario;
            $this->response->body($base);
        }
        else
            HTTP::redirect('/Home/');
    }
    
    public function action_logout() 
    {
        if(Auth::instance()->get_user()) 
            Auth::instance()->logout(FALSE, TRUE);        
        HTTP::redirect('/Auth/login');        
    }
    
    public function action_disable() 
    {     
        if(Auth::instance()->get_user()) 
        {
            Auth::instance()->logout(FALSE, TRUE);        
            $base = View::factory('Auth/base');
            $base->contenido = View::factory('Auth/error_deshabilitado');
            $this->response->body($base);
        }
        else
            HTTP::redirect('/Auth/login');
    }
}
<?php defined('SYSPATH') or die('Not direct script access.');

class Controller_User extends Controller_Template {
    public $template = 'base';
    
    public function action_index()
    {
        $users = ORM::factory('user')->find_all();
        
        $view = View::factory('User/index');        
        $view->users = $users;
        
        $this->template->contenido = $view;
        $this->template->menu = "";
    }
    
    public function action_new()
    {
        
    }
    
    public function action_edit()
    {
        
    }
    
    public function action_delete()
    {
        //Borrado logico
    }
}
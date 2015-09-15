<?php 
class Controller_RestTest extends Controller {

    public $indata; // for POST and PUT

    function before() {
        parent::before();
        //echo "<pre>controller parameters:<br/>";
        //print_r($this->request->param());
        $this->indata = file_get_contents('php://input');
    }

    function action_index() {
	/*
	$medicamentos = ORM::factory('Medicamento')
            ->where('habilitado', '=', 1)->find_all()->as_array();
	
	$data = array();

	foreach($medicamentos as $med) {
	   array_push($data, array('id'=>$med->id, 'nombre_distintivo'=>$med->nombre_distintivo));
	}
	*/	
	$data = array('uno'=>1, 'dos'=>'tres');

	$output = json_encode($data);       
        $this->response->status(Arr::get($data, 'code', 200));       
        $this->response->headers('content-type', File::mime_by_ext('json'));
        $this->response->headers('content-length', (string) strlen($output));       
        $this->response->body($output);
    }

    function action_create() {
	//$data = json_decode($this->request->body(), true);
	$data = $this->request->body();
	
	$this->response->headers('content-type', File::mime_by_ext('json'));
        $this->response->headers('content-length', (string) strlen($data));       
        $this->response->body($data);
	
    }
    function action_update() {
        echo 'action_update(): PUT';
        echo "indata<br/>";
        print_r($this->indata);         
    }

    function action_delete() {
        echo 'action_delete(): DELETE';
    }

    function output($data = array()) {
               
        
    }
}

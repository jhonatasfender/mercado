<?php

class Produtos extends CI_Controller {

	public function index(){
		$this->load->database();
		$this->load->model("produtos_model");
		$this->load->helper("url");
		$this->load->helper("currency");

	    $dados = array(
	    	"produtos" => $this->produtos_model->buscaTodos()
	    );
	    $this->load->view("produtos/index.php",$dados);
	}
}
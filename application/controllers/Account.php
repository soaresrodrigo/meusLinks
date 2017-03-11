<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public $dados;

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->Login_model->level_access(1);
		$this->dados['titulo'] = 'Login';
		$this->dados['model'] = 'login';
		$this->load->view('masterDefault', $this->dados);
	}
}

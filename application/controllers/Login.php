<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index($data = null){

		if($this->isLogged()){
			redirect('/dashboard');
		}
		if($this->input->post()){
			$result = $this->Login_model->login();
			$data['error'] = $result;
		}
		$this->load->view('login' , $data);
		
	}

	public function logout(){

		$this->session->sess_destroy();
		redirect('/dashboard');
	}

	public function loggin_redirect(){
		
	}
	
}
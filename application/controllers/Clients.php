<?php


class Clients extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->isLoggedWithRedirection();
	}

	public function index(){
		$this->load->view('clients/index');
	}

	public function all_list(){
		$this->load->model('clients_model');
		$data['table'] = $this->clients_model->all_list();

		$this->load->view('clients/all_list' , $data);
	}

	public function save_contact(){
		$this->load->model('clients_model');	
		$data = $this->input->post();

		$this->load->helper('url');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fullname', 'Nombre', 'required');
		$this->form_validation->set_rules('address', 'Direccion', 'required');
		$this->form_validation->set_rules('address2', 'Colonia', 'required');
		$this->form_validation->set_rules('phone', 'Telefono', 'required|numeric');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('clients/index');
		}
		else
		{			
			$this->clients_model->save_contact($data);						
			redirect('/clients');
		}
	}	
}


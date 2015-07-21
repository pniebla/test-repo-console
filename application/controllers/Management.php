<?php


class Management extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->isLoggedWithRedirection();
	}

	public function index(){
		$this->load->model('management_model');
		$data['select_clients'] = $this->management_model->get_all_clients();
		$this->load->view('management/index' , $data);
	}

	public function all_list(){
		$this->load->model('management_model');
		$data['table'] = $this->management_model->all_list();

		$this->load->view('management/all_list' , $data);
	}

	public function save_contact(){
		$this->load->model('management_model');	
		$data = $this->input->post();

		$this->load->helper('url');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fullname', 'Nombre', 'required');
		$this->form_validation->set_rules('address', 'Direccion', 'required');
		$this->form_validation->set_rules('address2', 'Colonia', 'required');
		$this->form_validation->set_rules('phone', 'Telefono', 'required|numeric');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('management/index');
		}
		else
		{			
			$this->management_model->save_contact($data);						
			redirect('/management');
		}
	}

	public function rents(){
		$this->load->model('management_model');
		$data['select_clients'] = $this->management_model->get_all_clients();

	}

	public function new_rent(){
		$this->load->model('management_model');

	}

	public function sales(){
		$this->load->model('management_model');

	}

	public function new_sales(){
		$this->load->model('management_model');

	}

	public function get_client_info(){
		$id = $this->input->post('id');
		$this->load->model('management_model');
		$client_info = $this->management_model->get_clients_info($id);

		echo json_encode($client_info);
	}

	public function sales_panel(){
		$this->load->model('management_model');
		$data['select_clients'] = $this->management_model->get_all_clients();
		$this->load->view('management/sales_panel' , $data);
	}
}


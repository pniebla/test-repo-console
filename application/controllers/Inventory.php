<?php 

class Inventory extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->isLoggedWithRedirection();
	}

	public function index(){
		$this->load->model('inventory_model');		
		$data['inventory_type'] = $this->inventory_model->inventory_type_select();
		$this->load->view('inventory/index',$data);

	}

	public function inventory_list(){
		$this->load->model('inventory_model');
		$data['table'] = $this->inventory_model->inventory_list();

		$this->load->view('inventory/list',$data);
	}

	public function save(){
		$this->load->model('inventory_model');	
		$data = $this->input->post();

		$this->load->helper('url');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('code', 'Codigo', 'required');
		$this->form_validation->set_rules('type', 'Tipo', 'required');

		echo '<pre>'; print_r($data); echo '</pre>';

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{			
			$this->inventory_model->save($data);						
			redirect('/inventory');
		}
	}

	public function item($item_id){
		$this->load->model('inventory_model');
		$data = $this->inventory_model->inventory_item($item_id);
		echo "<pre>"; print_r($data); echo "</pre>";
		$data['inventory_type'] = $this->inventory_model->inventory_type_select($data['type']);

		$this->load->view('inventory/inventory_item',$data);		
	}

	public function update_item(){
		$this->load->model('inventory_model');
		$data = $this->inventory_model->update_item($this->input->post());
		redirect('/inventory/inventory_list');		
	}

	public function delete_item($item_id){
		$this->load->model('inventory_model');
		$data = $this->inventory_model->delete_item($item_id);

		redirect('/inventory/inventory_list');
	}	

	public function inventory_update(){

	}

	public function inventory_delete(){

	}

	public function inventory_type(){			

		$this->load->view('inventory/inventory_type');
	}

	public function inventory_type_list(){
		$this->load->model('inventory_model');
		$data['table'] = $this->inventory_model->inventory_type_list();

		$this->load->view('inventory/type_list',$data);
	}

	public function inventory_type_save(){
		$this->load->model('inventory_model');	
		$data = $this->input->post();

		$this->load->helper('url');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Nombre', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{			
			$this->inventory_model->save_type($data);						
			redirect('/inventory/inventory_type');
		}
	}

	public function inventory_type_update(){

	}

	public function inventory_type_delete(){

	}
}
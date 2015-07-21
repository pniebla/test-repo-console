<?php
class Dashboard extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->isLoggedWithRedirection();
	}

	public function index(){
		
		$this->load->view('dashboard/index');
	}	
}

?>


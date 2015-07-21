<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{	
	public function __construct() {
		parent::__construct();
		
		//$user_id = $this->session->userdata('user_id');
		//if(($this->session->userdata('user_id') == 927)) 
		//{
		//}
		if(!$this->input->is_ajax_request() || !$this->input->is_cli_request()) {
			$isLogged = $this->session->userdata('isLogged');		
			if(!isset($isLogged) || $isLogged == FALSE){	
			//	redirect('/');	
			}
		}
		/*elseif($this->input->is_cli_request())
		{
		}*/
	}


	private function getLastDateUpdated()
	{		
		/*ini_set('display_errors', 1);
		$this->load->model('time_update_model');
		$return = '';
		$this->load->model('time_update_model');
		$result = $this->time_update_model->getLastDateUpdated();	
		if($result != NULL)
		{
			$return = $result[0]->LastUpdateDate;		
			
			$dt = new DateTime($return); 
			$return = $dt->format('l F jS\ Y h:i A'); 
		}
		$this->session->set_userdata('LastDataUpdateDate',$return);*/
		//return $return;
		
	}

	function isLoggedWithRedirection()  
	{
		$isLogged = $this->session->userdata('isLogged');
		$return = FALSE;
		
		if(!isset($isLogged) || $isLogged == FALSE)			
			redirect('/');	
		else
		{
			$this->getLastDateUpdated();			
			$return = $isLogged;
		}		
		
		return $return;
	}		
	
	function isLogged()
	{
		$isLogged = $this->session->userdata('isLogged');
		$return = FALSE;
		
		if(!isset($isLogged) || $isLogged == FALSE){			
			$return = FALSE;	
		}
		else{
			$this->getLastDateUpdated();			
			$return = $isLogged;
		}		
		
		return $return;
	}
	
	function getLoggedUserType()
	{
		$loggedType = $this->session->userdata('user_type') != FALSE ? $this->session->userdata('user_type') : 0;
		
		return 	$loggedType;			
	}	
	
}
?>
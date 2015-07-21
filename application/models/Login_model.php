<?php

class Login_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function login(){

		$result = true;
		$data = array('user' => $this->input->post('user') , 'password' => md5($this->input->post('password')) );
		$query = $this->db->get_where('cnsl_users', $data );
		if($query->num_rows() > 0){
			$result = false;
			$user_session = array('isLogged'=>1);
			$this->session->set_userdata($user_session);
			$query_result = $query->result_array();
			$this->session->set_userdata($query_result[0]);
		
			redirect('/dashboard');
		}
		
		return $result;
	}

	public function check_user(){
		$result = false;
		$query = $this->db->get_where('cnsl_users', array('user' => $this->input->post('user') ));
		if($query->num_rows() > 0){
			$result = true;
		}
		
		return $result;
	}

	public function create_user(){

		$data = array('id'=>null , 'user' => $this->input->post('user') , 'password' => md5($this->input->post('password')));
		$check_user = $this->check_user();
		if(!$check_user){
			$query = $this->db->insert('cnsl_users' , $data);
			echo '<pre>'; print_r($query); echo '</pre>';
		}
	}

	public function edit_user(){

	}

	public function delete_user(){

	}
}


?>
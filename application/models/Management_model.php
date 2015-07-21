<?php

class Management_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function save_contact($data){		
		$this->db->insert('cnsl_contacts' , $data);
	}

	public function all_list(){
		$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get('cnsl_contacts');
		$table ='';
		foreach ($query->result() as $row) {
			$table .= "<tr>
							<td>{$row->fullname}</td>
							<td>{$row->address}</td>
							<td>{$row->address2}</td>
							<td>{$row->phone}</td>
							<td>{$row->date}</td>
						</tr>";
		}

		return $table;
	}

	public function get_all_clients(){
		$query = $this->db->get('cnsl_contacts');

		return $query->result();
	}


	public function get_clients_info($id){
		$query = $this->db->get_where('cnsl_contacts', array('id' => $id));
		$result = $query->result();
		return $result[0];
	}
}
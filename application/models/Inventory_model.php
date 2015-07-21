<?php
/**
* Modelo de inventario
*/
class Inventory_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function inventory_list(){
		$this->db->select('cnsl_inventory.id,cnsl_inventory.code,cnsl_inventory_type.name,cnsl_inventory.cost,cnsl_inventory.description');
		$this->db->from('cnsl_inventory');
		$this->db->join('cnsl_inventory_type', 'cnsl_inventory.type = cnsl_inventory_type.id');

		$query = $this->db->get();
	
		$table = '';
		foreach ($query->result() as $row) {
			$table .= "<tr><td><a href='/inventory/item/{$row->id}'>{$row->code}</a></td><td>{$row->name}</td><td>{$row->cost}</td><td>{$row->description}</td></tr>";
		}

		return $table;
	}

	public function inventory_item($item_id){
		$this->db->select('cnsl_inventory.id,cnsl_inventory.type,cnsl_inventory.code,cnsl_inventory_type.name,cnsl_inventory.cost,cnsl_inventory.description');
		$this->db->from('cnsl_inventory');
		$this->db->join('cnsl_inventory_type', 'cnsl_inventory.type = cnsl_inventory_type.id');
		$query = $this->db->where('cnsl_inventory.id',$item_id);
		$result = array();
		$query = $this->db->get();

		foreach ($query->result() as $row) {
			$result['id'] = $row->id;
			$result['code'] = $row->code;
			$result['cost'] = $row->cost;
			$result['type'] = $row->type;
			$result['description'] = $row->description;
		}
		return $result;		
	}

	public function update_item($data){
		
		$id = $data['id'];
		$this->db->where('id', $id);
		$this->db->update('cnsl_inventory', $data);
	}

	public function delete_item($id){
		$this->db->delete('cnsl_inventory', array('id' => $id));
	}

	public function save($data){
	
		return $this->db->insert('cnsl_inventory',$data);
	}

	public function save_type($data){
	
		return $this->db->insert('cnsl_inventory_type',$data);
	}

	public function inventory_type_list(){
		$query = $this->db->get('cnsl_inventory_type');

		$table = '';
		foreach ($query->result() as $row) {
			$table = "<tr><td>{$row->name}</td><td>{$row->description}</td></tr>";
		}

		return $table;
	}

	public function inventory_type_select($type_id = null){
		$query = $this->db->get('cnsl_inventory_type');
		$select = '';
			$select .= "<option value=''> - Seleccione una opcion - </option>";

		foreach ($query->result() as $row) {
			if($row->id == $type_id){
				$select .= "<option value='{$row->id}' selected >{$row->name}</option>";
			}
			$select .= "<option value='{$row->id}'>{$row->name}</option>";
		}

		return $select;
	}
}
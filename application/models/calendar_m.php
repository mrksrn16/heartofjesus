<?php
class Calendar_M extends MY_Model {
	
	protected $_table_name = "special";
	
	public function get_events($start, $end)
	{
	    return $this->db->where("start_date >=", $start)->where("end_date <=", $end)->get($this->_table_name);
	}

	public function add_event($data)
	{
	    $this->db->insert($this->_table_name, $data);
	}

	public function get_event($id)
	{
	    return $this->db->where("id", $id)->get($this->_table_name);
	}

// public function update_event($id, $data)
// {
//     $this->db->where("id", $id)->update($this->_table_name, $data);
// }

// public function delete_event($id)
// {
//     $this->db->where("id", $id)->delete($this->_table_name);
// }
}
?>
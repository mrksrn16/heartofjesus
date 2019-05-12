<?php
class Holidays_m extends MY_Model {
	
	protected $_table_name = "holidays";
	
	public function get_events($start, $end)
	{
	    return $this->db->where("date >=", $start)->where("date <=", $end)->get($this->_table_name);
	 
	}
}
?>
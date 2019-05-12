<?php
class Blessings_m extends MY_Model {
	
	protected $_table_name = "blessings";
	
	public function __construct(){
		parent::__construct();
	}
	public function get_blessings(){
		$this->db->where('isActive', 1);
		$this->db->order_by('id', 'desc');
		return $this->db->get($this->_table_name)->result();
	}
	public function get_by_id($id){
		$where = "id=$id AND isActive=1";
		$this->db->where($where);
		return $this->db->get($this->_table_name)->row();
	}
	public function search($string)
	{
		$this->db->select('*');
		$this->db->from($this->_table_name);
		$this->db->like('name', $string);
		$this->db->or_like('address', $string);
		$this->db->or_like('age', $string);
		$this->db->or_like('contact', $string);
		$this->db->order_by('isActive',1);
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return $query->result();
		}
	}
	public function get_events($start, $end)
	{
	    return $this->db->where("date >=", $start)->where("date <=", $end)->get($this->_table_name);
	}
	public function sort_done(){
		$now = date('Y-m-d');
		$where = "date <= '$now' AND isActive = 1";
		$this->db->where($where);
		$this->db->order_by('id', 'desc');
		return $this->db->get($this->_table_name)->result();
	}
}
?>
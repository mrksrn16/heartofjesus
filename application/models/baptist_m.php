<?php
class Baptist_M extends MY_Model {
	
	protected $_table_name = "baptist";
	
	public function __construct(){
		parent::__construct();
	}
	public function get_baptists(){
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
		$this->db->like('child_name', $string);
		$this->db->or_like('name_of_priest', $string);
		$this->db->or_like('current_address', $string);
		$this->db->or_like('father', $string);
		$this->db->or_like('mother', $string);
		$this->db->or_like('date_of_baptism', $string);
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
	    return $this->db->where("date_of_baptism >=", $start)->where("date_of_baptism <=", $end)->get($this->_table_name);
	}
	public function sort_done(){
		$now = date('Y-m-d');
		$where = "date_of_baptism <= '$now' AND isActive = 1";
		$this->db->where($where);
		$this->db->order_by('id', 'desc');
		return $this->db->get($this->_table_name)->result();
	}
}
?>
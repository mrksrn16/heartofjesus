<?php
class Priests_M extends MY_Model {
	
	protected $_table_name = "priests";
	
	public function __construct(){
		parent::__construct();

	}
	public function get_priests(){
		$this->db->where('isActive', 1);
		return $this->db->get($this->_table_name)->result();
	}
	public function get_by_id($id){
		$where = "id=$id AND isActive=1";
		$this->db->where($where);
		return $this->db->get($this->_table_name)->row();
	}
	public function get_schedule($priest_id, $sched_id = NULL){
		if($sched_id){
			$where = "priest_id=$priest_id AND id=$sched_id";
			$this->db->where($where);
			return $this->db->get('priest_schedule')->row();
		}else{
			$this->db->where('priest_id', $priest_id);
			return $this->db->get('priest_schedule')->result();
		}
	}
	public function search($string)
	{
		$this->db->select('*');
		$this->db->from($this->_table_name);
		$this->db->like('name', $string);
		$this->db->or_like('age', $string);
		$this->db->or_like('birthplace', $string);
		$this->db->or_like('birthday', $string);
		$this->db->or_like('address', $string);
		$this->db->or_like('position', $string);
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
	public function check_priest_schedule($priest, $date, $time){
		$count = 0;
		$where = "date='$date' AND time='$time' AND priest='$priest'";
		$this->db->where($where);
		$res_blessing = $this->db->get('blessings')->row();
		if($res_blessing){
			$count = $count + 1;
		}
		$where = "date='$date' AND time='$time' AND priest='$priest'";
		$this->db->where($where);
		$res_burial = $this->db->get('burials')->row();
		if($res_burial){
			$count = $count + 1;
		}
		$where = "date='$date' AND time='$time' AND priest='$priest'";
		$this->db->where($where);
		$res_marriage = $this->db->get('marriage')->row();
		if($res_marriage){
			$count = $count + 1;
		}
		$where = "date_of_baptism='$date' AND time='$time' AND name_of_priest='$priest'";
		$this->db->where($where);
		$res_baptist = $this->db->get('baptist')->row();
		if($res_baptist){
			$count = $count + 1;
		}

		return $count;
	}
}
?>
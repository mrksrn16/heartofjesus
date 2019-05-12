<?php
class Marriage_M extends MY_Model {
	
	protected $_table_name = "marriage";
	
	public function __construct(){
		parent::__construct();
	}
	public function get_marriage(){
		$this->db->where('isActive', 1);
		$this->db->order_by('id', 'desc');
		return $this->db->get($this->_table_name)->result();
	}
	public function get_bride($id){
		$this->db->where('id', $id);
		return $this->db->get('bride_info')->row();
	}
	public function get_broom($id){
		$this->db->where('id', $id);
		return $this->db->get('broom_info')->row();
	}
	public function get_bride_req($id){
		$this->db->where('bride_id', $id);
		return $this->db->get('bride_requirements')->row();
	}
	public function get_broom_req($id){
		$this->db->where('broom_id', $id);
		return $this->db->get('broom_requirements')->row();
	}
	public function get_by_id($id){
		$where = "id=$id AND isActive=1";
		$this->db->where($where);
		return $this->db->get($this->_table_name)->row();
	}
	// public function search($string)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from($this->_table_name);
	// 	$this->db->like('name', $string);
	// 	$this->db->or_like('address', $string);
	// 	$this->db->or_like('age', $string);
	// 	$this->db->or_like('contact', $string);
	// 	$this->db->order_by('isActive',1);
	// 	$query = $this->db->get();
	// 	if($query->num_rows() > 0)
	// 	{
	// 		return $query->result();
	// 	}
	// 	else
	// 	{
	// 		return $query->result();
	// 	}
	// }
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
	public function check_bride_requirements($marriage_id, $bride_id){
		$count = 0;
		$this->db->where('bride_id', $bride_id);
		$bride_req = $this->db->get('bride_requirements')->row();
        if($bride_req->bride_req_marriage_license_released && $bride_req->bride_req_marriage_license_submitted && $bride_req->bride_req_marriage_contract && $bride_req->bride_req_baptismal_marriage && $bride_req->bride_req_marriage_license_released && $bride_req->bride_req_request_permission && $bride_req->bride_req_confirmation_ar_number && $bride_req->bride_req_banns && $bride_req->bride_req_coupled_seminar && $bride_req->bride_req_cenomar &&$bride_req->bride_req_confession && $bride_req->bride_req_baranggay_clearance && $bride_req->bride_req_baranggay_church_ar_no){
        	$count = $count + 0;
        }else{
        	$count = $count + 1;
        }
        return $count;
	}
	public function check_groom_requirements($marriage_id, $groom_id){
		$count = 0;
		$this->db->where('broom_id', $groom_id);
		$broom_req = $this->db->get('broom_requirements')->row();
        if($broom_req->broom_req_marriage_license_released && $broom_req->broom_req_marriage_license_submitted && $broom_req->broom_req_marriage_contract && $broom_req->broom_req_baptismal_marriage && $broom_req->broom_req_marriage_license_released && $broom_req->broom_req_request_permission && $broom_req->broom_req_confirmation_ar_number && $broom_req->broom_req_banns && $broom_req->broom_req_coupled_seminar && $broom_req->broom_req_cenomar &&$broom_req->broom_req_confession && $broom_req->broom_req_baranggay_clearance && $broom_req->broom_req_baranggay_church_ar_no){
        	$count = $count + 0;
        }else{
        	$count = $count + 1;
        }
		return $count;
	}
}
?>
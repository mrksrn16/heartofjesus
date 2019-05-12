<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Status extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}
	public function changed_status(){
		$data = array(
			'status' => $this->input->post('status'),
		);
		$this->db->where('id', $this->input->post('event_id'));
		if($this->db->update($this->input->post('event'), $data)){
			if($this->input->post('event') == 'burials'){
				redirect('burial');
			}else if($this->input->post('event') == 'blessings'){
				redirect('blessing');
			}
			else{
				redirect($this->input->post('event'));
			}
		}
	}
}
?>
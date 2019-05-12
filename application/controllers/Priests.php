<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Priests extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->data['priests'] = $this->priests_m->get_priests();
		$this->data['subview'] = 'priests/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function search()
	{
		$this->data['priests'] = $this->priests_m->search($this->input->post('keyword'));
		$this->data['subview'] = 'priests/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function add(){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $this->input->post('name');
			$age = $this->input->post('age');
			$birthday = $this->input->post('birthday');
			$birthplace = $this->input->post('birthplace');
			$address = $this->input->post('address');
			$position = $this->input->post('position');
			$data = array(
					'name' => $name,
					'age' => $age,
					'birthday' => $birthday,
					'birthplace' => $birthplace,
					'address' => $address,
					'position' => $position,
				);
			if($this->db->insert('priests', $data)){
				redirect('priests');
			}
		}
		$this->data['subview'] = 'priests/add';
		$this->load->view('_layout_main', $this->data);
	}
	public function view($id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = array(
					'day' => $this->input->post('day'),
					'start_time' => $this->input->post('start_time'),
					'end_time' => $this->input->post('end_time'),
					'priest_id' => $id,
				);
			$this->db->insert('priest_schedule', $data);
		}
		$this->data['schedules'] = $this->priests_m->get_schedule($id);
		$this->data['priest'] = $this->priests_m->get_by_id($id);
		$this->data['subview'] = 'priests/view';
		$this->load->view('_layout_main', $this->data);
	}
	public function edit($id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $this->input->post('name');
			$age = $this->input->post('age');
			$birthday = $this->input->post('birthday');
			$birthplace = $this->input->post('birthplace');
			$address = $this->input->post('address');
			$position = $this->input->post('position');
			$data = array(
					'name' => $name,
					'age' => $age,
					'birthday' => $birthday,
					'birthplace' => $birthplace,
					'address' => $address,
					'position' => $position,
				);
			$this->db->where('id', $id);
			if($this->db->update('priests', $data)){
				redirect('priests');
			}
		}
		$this->data['priest'] = $this->priests_m->get_by_id($id);
		$this->data['subview'] = 'priests/edit';
		$this->load->view('_layout_main', $this->data);
	}
	public function deactivate($id){
		$data = array(
				'isActive' => 0
			);
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->update('priests', $data)){
			redirect('priests');
		}
	}
	public function edit_schedule($priest_id, $schedule_id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = array(
					'day' => $this->input->post('day'),
					'start_time' => $this->input->post('start_time'),
					'end_time' => $this->input->post('end_time'),
				);
			$where = "priest_id = $priest_id AND id = $schedule_id";
			$this->db->where($where);
			if($this->db->update('priest_schedule', $data)){
				redirect('priests/view/' . $priest_id);
			}
		}
		$this->data['schedule'] = $this->priests_m->get_schedule($priest_id, $schedule_id);
		$this->data['subview'] = 'priests/edit_schedule';
		$this->load->view('_layout_main', $this->data);
	}
	public function remove_schedule($priest_id, $schedule_id){
		$where = "priest_id = $priest_id AND id = $schedule_id";
		$this->db->where($where);
		$this->db->limit(1);
		if($this->db->delete('priest_schedule')){
			redirect('priests/view/' . $priest_id);
		}
	}
	public function get_priest(){
	 		$date_of_event = $this->input->post('date_of_event');
			$time_of_event = $this->input->post('time_of_event');
			//$timestamp = strtotime($this->input->post('time_of_event')) + 60*60;
			//$time_of_event = date('H:i', $timestamp);

			$sel_day = date('l', strtotime($date_of_event));
	 		$where = "day = '$sel_day' AND start_time <= '$time_of_event' AND (DATE_SUB(end_time, INTERVAL 1 HOUR) >= '$time_of_event')";

	 		$this->db->distinct();
	 		$this->db->select('priest_id');
			$this->db->where($where);
			$res = $this->db->get('priest_schedule')->result();
			
			$priests_ids = array();
			foreach($res as $r){
				$priests_ids[] = $r->priest_id;
			}
			$this->db->where_in('id', $priests_ids);
			$result = $this->db->get('priests')->result();
			echo json_encode(array('result' => $result));
	 }
}
?>
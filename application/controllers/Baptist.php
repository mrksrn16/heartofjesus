<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Baptist extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->data['checked'] = FALSE;
		$this->data['baptists'] = $this->baptist_m->get_baptists();
		$this->data['subview'] = 'baptist/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function sort_done(){
		$this->data['checked'] = TRUE;
		$this->data['baptists'] = $this->baptist_m->sort_done();
		$this->data['subview'] = 'baptist/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function search()
	{
		$this->data['baptists'] = $this->baptist_m->search($this->input->post('keyword'));
		$this->data['subview'] = 'baptist/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function add($date = NULL){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$date = $this->input->post('date_of_baptism');
			$time =  $this->input->post('time');
			$chk_time = $this->time_m->check_baptist_availability($date, $time);
			if(count($chk_time) < 50){
				//$priest = $this->input->post('name_of_priest');
				//$this->db->where('name', $priest);
				//$p = $this->db->get('priests')->row();
				//$this->db->where('priest_id', $p->id);
				//$p_sched = $this->db->get('priest_schedule')->result();
				//$date_of_baptism = $this->input->post('date_of_baptism');
				//$time_of_baptism = $this->input->post('time');
				//$sel_day = date('l', strtotime($date_of_baptism));
				//$where = "priest_id =  $p->id AND day = '$sel_day' AND start_time <= '$time_of_baptism' AND end_time >= '$time_of_baptism'";
				//$this->db->where($where);
				//$res = $this->db->get('priest_schedule')->result();
				$date = $this->input->post('date_of_baptism');
				$time = $this->input->post('time');
				$name_of_priest = $this->input->post('name_of_priest');
				$chk_priest_sched = $this->priests_m->check_priest_schedule($name_of_priest, $date, $time);
				if(chk_priest_sched == 0){
					$data = array(
							'child_name' => $this->input->post('child_name'),
							'birthday' => $this->input->post('birthday'),
							'birthplace' => $this->input->post('birthplace'),
							'father' => $this->input->post('father'),
							'father_birth_place' => $this->input->post('father_birth_place'),
							'mother' => $this->input->post('mother'),
							'mother_birth_place' => $this->input->post('mother_birth_place'),
							'married_at' => $this->input->post('married_at'),
							'current_address' => $this->input->post('current_address'),
							'date_of_baptism' => $this->input->post('date_of_baptism'),
							'time' => $this->input->post('time'),
							'name_of_priest' => $this->input->post('name_of_priest'),
							'god_father_name' => $this->input->post('god_father_name'),
							'god_father_address' => $this->input->post('god_father_address'),
							'god_mother_name' => $this->input->post('god_mother_name'),
							'god_mother_address' => $this->input->post('god_mother_address'),
							'marriage_contract' => $this->input->post('marriage_contract'),
							'birth_certificate' => $this->input->post('birth_certificate'),
							'registration_fee' => $this->input->post('registration_fee'),
							'other_god_father' => $this->input->post('other_god_father'),
							'other_god_father2' => $this->input->post('other_god_father2'),
							'other_god_father3' => $this->input->post('other_god_father3'),
							'other_god_father4' => $this->input->post('other_god_father4'),
							'other_god_father5' => $this->input->post('other_god_father5'),
							'other_god_mother' => $this->input->post('other_god_mother'),
							'other_god_mother2' => $this->input->post('other_god_mother2'),
							'other_god_mother3' => $this->input->post('other_god_mother3'),
							'other_god_mother4' => $this->input->post('other_god_mother4'),
							'other_god_mother5' => $this->input->post('other_god_mother5'),
						);
					if($this->db->insert('baptist', $data)){
						redirect('baptist');
					}
				}else{
					echo "<script>alert('Priest not available.');</script>";
				}
			}else{
				echo "<script>alert('Schedule is full.');</script>";
			}
			
		}
		$this->data['priests'] = $this->priests_m->get_priests();
		$this->data['date'] = $date;
		$this->data['subview'] = 'baptist/add';
		$this->load->view('_layout_main', $this->data);
	}
	public function view($id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}
		$this->data['baptist'] = $this->baptist_m->get_by_id($id);
		$this->data['subview'] = 'baptist/view';
		$this->load->view('_layout_main', $this->data);
	}
	public function edit($id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = array(
					'child_name' => $this->input->post('child_name'),
					'birthday' => $this->input->post('birthday'),
					'birthplace' => $this->input->post('birthplace'),
					'father' => $this->input->post('father'),
					'father_birth_place' => $this->input->post('father_birth_place'),
					'mother' => $this->input->post('mother'),
					'mother_birth_place' => $this->input->post('mother_birth_place'),
					'married_at' => $this->input->post('married_at'),
					'current_address' => $this->input->post('current_address'),
					'date_of_baptism' => $this->input->post('date_of_baptism'),
					'time' => $this->input->post('time'),
					'name_of_priest' => $this->input->post('name_of_priest'),
					'god_father_name' => $this->input->post('god_father_name'),
					'god_father_address' => $this->input->post('god_father_address'),
					'god_mother_name' => $this->input->post('god_mother_name'),
					'god_mother_address' => $this->input->post('god_mother_address'),
					'marriage_contract' => $this->input->post('marriage_contract'),
					'birth_certificate' => $this->input->post('birth_certificate'),
					'registration_fee' => $this->input->post('registration_fee'),
					'other_god_father' => $this->input->post('other_god_father'),
					'other_god_father2' => $this->input->post('other_god_father2'),
					'other_god_father3' => $this->input->post('other_god_father3'),
					'other_god_father4' => $this->input->post('other_god_father4'),
					'other_god_father5' => $this->input->post('other_god_father5'),
					'other_god_mother' => $this->input->post('other_god_mother'),
					'other_god_mother2' => $this->input->post('other_god_mother2'),
					'other_god_mother3' => $this->input->post('other_god_mother3'),
					'other_god_mother4' => $this->input->post('other_god_mother4'),
					'other_god_mother5' => $this->input->post('other_god_mother5'),
				);
			$this->db->where('id', $id);
			if($this->db->update('baptist', $data)){
				redirect('baptist');
			}
		}
		$this->data['priests'] = $this->priests_m->get_priests();
		$this->data['baptist'] = $this->baptist_m->get_by_id($id);
		$this->data['subview'] = 'baptist/edit';
		$this->load->view('_layout_main', $this->data);
	}
	public function deactivate($id){
		$data = array(
				'isActive' => 0
			);
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->update('baptist', $data)){
			redirect('baptist');
		}
	}
	public function update($id){
		$data = array(
				'remarks' => $this->input->post('remarks')
			);
		$this->db->where('id', $id);
		if($this->db->update('baptist', $data)){
			redirect('baptist');
		}

	}
	public function get_events()
	 {
	     // Our Start and End Dates
	     $start = $this->input->get("start");
	     $end = $this->input->get("end");

	     $startdt = new DateTime('now'); // setup a local datetime
	     $startdt->setTimestamp($start); // Set the date based on timestamp
	     $start_format = $startdt->format('Y-m-d H:i:s');

	     $enddt = new DateTime('now'); // setup a local datetime
	     $enddt->setTimestamp($end); // Set the date based on timestamp
	     $end_format = $enddt->format('Y-m-d H:i:s');

	     $events = $this->baptist_m->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {

	         $data_events[] = array(
	             "id" => $r->id,
	             "title" => 'Baptist -'. $r->child_name,
	             "end" => date('Y-m-d', strtotime($r->date_of_baptism. ' + 1 day')),
	             "start" => $r->date_of_baptism,
	             "slug" => 'baptist'
	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     exit();
	 }
	 public function get_priest(){
	 		$date_of_baptism = $this->input->post('date_of_baptism');
			$time_of_baptism = $this->input->post('time_of_baptism');
			$sel_day = date('l', strtotime($date_of_baptism));
	 		$where = "day = '$sel_day' AND start_time <= '$time_of_baptism' AND end_time >= '$time_of_baptism'";
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
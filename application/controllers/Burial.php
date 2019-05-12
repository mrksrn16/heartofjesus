<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Burial extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->data['checked'] = FALSE;
		$this->data['burials'] = $this->burial_m->get_burials();
		$this->data['subview'] = 'burial/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function sort_done(){
		$this->data['checked'] = TRUE;
		$this->data['burials'] = $this->burial_m->sort_done();
		$this->data['subview'] = 'burial/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function search()
	{
		$this->data['burials'] = $this->burial_m->search($this->input->post('keyword'));
		$this->data['subview'] = 'burial/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function add($date=NULL){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$date = $this->input->post('date');
			$time = $this->input->post('time');
			$death_person = $this->input->post('death_person');
			$cause_of_death = $this->input->post('cause_of_death');
			$dod = $this->input->post('dod');
			$dob = $this->input->post('dob');
			$death_certificate = $this->input->post('death_certificate');
			$name_of_priest = $this->input->post('name_of_priest');

			$chk_time = $this->time_m->check_time($date, $time);
			if($chk_time == 0){
				$data = array(
						'date' => $date,
						'time' => $time,
						'end_time' => $this->input->post('end_time'),
						'priest' => $name_of_priest,
						'death_person' => $death_person,
						'cause_of_death' => $cause_of_death,
						'dod' => $dod,
						'dob' => $dob,
						'death_certificate' => $death_certificate,
					);
				if($this->db->insert('burials', $data)){
					redirect('burial');
				}
			}else{
				echo "<script>alert('Date and Time already taken.');</script>";
			}
		}
		$this->data['date'] = $date;
		$this->data['subview'] = 'burial/add';
		$this->load->view('_layout_main', $this->data);
	}
	public function view($id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		}
		$this->data['burial'] = $this->burial_m->get_by_id($id);
		$this->data['subview'] = 'burial/view';
		$this->load->view('_layout_main', $this->data);
	}
	public function edit($id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$date = $this->input->post('date');
			$time = $this->input->post('time');
			$death_person = $this->input->post('death_person');
			$cause_of_death = $this->input->post('cause_of_death');
			$dod = $this->input->post('dod');
			$dob = $this->input->post('dob');
			$death_certificate = $this->input->post('death_certificate');
			$name_of_priest = $this->input->post('name_of_priest');
			$data = array(
					'date' => $date,
					'time' => $time,
					'end_time' => $this->input->post('end_time'),
					'priest' => $name_of_priest,
					'death_person' => $death_person,
					'cause_of_death' => $cause_of_death,
					'dod' => $dod,
					'dob' => $dob,
					'death_certificate' => $death_certificate,
				);
			$this->db->where('id', $id);
			if($this->db->update('burials', $data)){
				redirect('burial/view/' . $id);
			}
		}
		$this->data['burial'] = $this->burial_m->get_by_id($id);
		$this->data['subview'] = 'burial/edit';
		$this->load->view('_layout_main', $this->data);
	}
	public function deactivate($id){
		$data = array(
				'isActive' => 0
			);
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->update('burials', $data)){
			redirect('burial');
		}
	}
	public function update($id){
		$data = array(
				'remarks' => $this->input->post('remarks')
			);
		$this->db->where('id', $id);
		if($this->db->update('burials', $data)){
			redirect('burial');
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

	     $events = $this->burial_m->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {

	         $data_events[] = array(
	             "id" => $r->id,
	             "title" => 'Burial -'. $r->death_person . ' (' . $r->status . ')',
	             "end" => date('Y-m-d', strtotime($r->date. ' + 1 day')),
	             "start" => $r->date,
	             "slug" => 'burial'
	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     exit();
	 }
	 
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blessing extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->data['checked'] = FALSE;
		$this->data['blessings'] = $this->blessings_m->get_blessings();
		$this->data['subview'] = 'blessing/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function sort_done(){
		$this->data['checked'] = TRUE;
		$this->data['blessings'] = $this->blessings_m->sort_done();
		$this->data['subview'] = 'blessing/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function search()
	{
		$this->data['blessings'] = $this->blessings_m->search($this->input->post('keyword'));
		$this->data['subview'] = 'blessing/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function add($date=NULL){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $this->input->post('name');
			$age = $this->input->post('age');
			$address = $this->input->post('address');
			$contact = $this->input->post('contact');
			$date = $this->input->post('date');
			$time = $this->input->post('time');
			$name_of_priest = $this->input->post('name_of_priest');
			$chk_time = $this->time_m->check_time($date, $time);
			$chk_priest_sched = $this->priests_m->check_priest_schedule($name_of_priest, $date, $time);
			if($chk_time == 0){
				if($check_priest_schedule == 0){
					$data = array(
							'name' => $name,
							'age' => $age,
							'address' => $address,
							'contact' => $contact,
							'date' => $date,
							'time' => $time,
							'end_time' => $this->input->post('end_time'),
							'priest' => $name_of_priest,
						);
					if($this->db->insert('blessings', $data)){
						redirect('blessing');
					}
				}else{
					echo "<script>alert('Priest selected already have an schedule on that day and time.');</script>";
				}
			}else{
				echo "<script>alert('Date and Time already taken.');</script>";
			}
		}
		$this->data['date'] = $date;
		$this->data['subview'] = 'blessing/add';
		$this->load->view('_layout_main', $this->data);
	}
	public function edit($id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$name = $this->input->post('name');
			$age = $this->input->post('age');
			$address = $this->input->post('address');
			$contact = $this->input->post('contact');
			$date = $this->input->post('date');
			$time = $this->input->post('time');
			$name_of_priest = $this->input->post('name_of_priest');
			$data = array(
					'name' => $name,
					'age' => $age,
					'address' => $address,
					'contact' => $contact,
					'date' => $date,
					'time' => $time,
					'end_time' => $this->input->post('end_time'),
					'priest' => $name_of_priest
				);
			$this->db->where('id', $id);
			if($this->db->update('blessings', $data)){
				redirect('blessing');
			}
		}
		$this->data['blessing'] = $this->blessings_m->get_by_id($id);
		$this->data['subview'] = 'blessing/edit';
		$this->load->view('_layout_main', $this->data);
	}
	public function deactivate($id){
		$data = array(
				'isActive' => 0
			);
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->update('blessings', $data)){
			redirect('blessing');
		}
	}
	public function update($id){
		$data = array(
				'remarks' => $this->input->post('remarks')
			);
		$this->db->where('id', $id);
		if($this->db->update('blessings', $data)){
			redirect('blessing');
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

	     $events = $this->blessings_m->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {

	         $data_events[] = array(
	             "id" => $r->id,
	             "title" => 'Blessing' . $r->name . '(' . $r->status . ')',
	             "end" => date('Y-m-d', strtotime($r->date. ' + 1 day')),
	             "start" => $r->date,
	             "slug" => 'blessing'
	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     exit();
	 }
}
?>
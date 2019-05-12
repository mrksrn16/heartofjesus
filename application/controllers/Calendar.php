<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calendar extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->data['subview'] = 'calendar/index';
		$this->load->view('_layout_main', $this->data);
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

	     $events = $this->calendar_m->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {
	         $data_events[] = array(
	             "id" => $r->id,
	             "title" => $r->name,
	             "description" => $r->description,
	             "end" => date('Y-m-d', strtotime($r->end_date. ' + 1 day')),
	             "start" => $r->start_date,
	             "event_time" => $r->event_time,
	             "priest" => $r->priest,
	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     exit();
	 }
	 public function add_event(){
	 	$name = $this->input->post('name');
	 	$description = $this->input->post('description');
	 	$start_date = $this->input->post('start');
	 	$name_of_priest = $this->input->post('name_of_priest');
	 	$endDate;
 		$end_date = $this->input->post('end');
 		if($end_date){
 			$endDate = $end_date;
 		}else{
 			$endDate = $start_date;
 		}
 		$event_time = $this->input->post('event_time');
 		$chk_time = $this->time_m->check_time($start_date, $event_time);
 		if($chk_time == 0){
	 		$data = array(
	 				'name' => $name,
	 				'description' => $description,
	 				'start_date' => $start_date,
	 				'end_date' => $endDate,
	 				'event_time' => $event_time,
	 				'priest' => $name_of_priest,
	 			);
	 		if($this->db->insert('special', $data)){
	 			redirect('calendar');
	 		}
 		}else{
 			echo "<script>alert('Date and Time already taken.');</script>";
 			$this->data['subview'] = 'calendar/index';
			$this->load->view('_layout_main', $this->data);
 		}
	 }
	 public function update_event(){
	 	$id = $this->input->post('event_id');
	 	$name = $this->input->post('name');
	 	$description = $this->input->post('description');
	 	$start = $this->input->post('start_event');
	 	$event_time = $this->input->post('event_time');
	 	$name_of_priest = $this->input->post('name_of_priest');
	 	$endDate;
	 	$end = $this->input->post('end');
	 	if($end){
	 		$endDate = $end;
	 	}else{
	 		$endDate = $start;
	 	}
	 	$data = array(
	 			'name' => $name,
	 			'description' => $description,
	 			'start_date' => $start,
	 			'end_date' => $endDate,
	 			'event_time' => $event_time,
	 			'priest' => $name_of_priest
	 		);
	 	$this->db->where('id', $id);
	 	$this->db->update('special', $data);
	 	redirect('calendar');
	 }
	 public function remove_event($id){
	 	$this->db->where('id', $id);
	 	$this->db->limit(1);
	 	$this->db->delete('special');
	 	redirect('calendar');
	 }
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Holidays extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}	
	 public function get_holidays()
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

	     $events = $this->holidays_m->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {

	         $data_events[] = array(
	             "id" => $r->id,
	             "title" => $r->name,
	             "end" => date('Y-m-d', strtotime($r->date. ' + 1 day')),
	             "start" => $r->date
	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     exit();
	 }
}
?>
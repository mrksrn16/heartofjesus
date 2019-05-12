<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Marriage extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->data['checked'] = FALSE;
		$this->data['marriage'] = $this->marriage_m->get_marriage();
		$this->data['subview'] = 'marriage/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function sort_done(){
		$this->data['checked'] = TRUE;
		$this->data['marriage'] = $this->marriage_m->sort_done();
		$this->data['subview'] = 'marriage/index';
		$this->load->view('_layout_main', $this->data);
	}
	// public function search()
	// {
	// 	$this->data['marriage'] = $this->marriage_m->search($this->input->post('keyword'));
	// 	$this->data['subview'] = 'marriage/index';
	// 	$this->load->view('_layout_main', $this->data);
	// }
	public function add($date=NULL){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$bride_id;
			$broom_id;
			$bride_father_occupation;
			if($this->input->post('bride_father_occupation')){
				$bride_father_occupation = $this->input->post('bride_father_occupation');
			}else{
				$bride_father_occupation = $this->input->post('bride_father_occupation_deceased');
			}
			if($this->input->post('bride_mother_occupation')){
				$bride_mother_occupation = $this->input->post('bride_mother_occupation');
			}else{
				$bride_mother_occupation = $this->input->post('bride_mother_occupation_deceased');
			}
			$bride = array(
					'bride_pob' => $this->input->post('bride_pob'),
					'bride_name' => $this->input->post('bride_name'),
					'bride_citizenship' => $this->input->post('bride_citizenship'),
					'bride_religion' => $this->input->post('bride_religion'),
					'bride_birthday' => $this->input->post('bride_birthday'),
					'bride_address' => $this->input->post('bride_address'),
					'bride_contact' => $this->input->post('bride_contact'),
					'bride_occupation' => $this->input->post('bride_occupation'),
					'bride_father' => $this->input->post('bride_father'),
					'bride_father_occupation' => $bride_father_occupation,
					'bride_mother' => $this->input->post('bride_mother'),
					'bride_mother_occupation' => $bride_mother_occupation,
				);
			$this->db->insert('bride_info', $bride);
			$bride_id = $this->db->insert_id();

			$broom_father_occupation;
			if($this->input->post('broom_father_occupation')){
				$broom_father_occupation = $this->input->post('broom_father_occupation');
			}else{
				$broom_father_occupation = $this->input->post('broom_father_occupation_deceased');
			}
			$broom_mother_occupation;
			if($this->input->post('broom_mother_occupation')){
				$broom_mother_occupation = $this->input->post('broom_mother_occupation');
			}else{
				$broom_mother_occupation = $this->input->post('broom_mother_occupation_deceased');
			}
			$broom = array(
					'broom_name' => $this->input->post('broom_name'),
					'broom_pob' => $this->input->post('broom_pob'),
					'broom_citizenship' => $this->input->post('broom_citizenship'),
					'broom_religion' => $this->input->post('broom_religion'),
					'broom_birthday' => $this->input->post('broom_birthday'),
					'broom_address' => $this->input->post('broom_address'),
					'broom_contact' => $this->input->post('broom_contact'),
					'broom_occupation' => $this->input->post('broom_occupation'),
					'broom_father' => $this->input->post('broom_father'),
					'broom_father_occupation' => $broom_father_occupation,
					'broom_mother' => $this->input->post('broom_mother'),
					'broom_mother_occupation' => $broom_mother_occupation,
				);
			$this->db->insert('broom_info', $broom);
			$broom_id = $this->db->insert_id();

			//requirements
			$bride_req_coupled_seminar = $this->input->post('bride_req_coupled_seminar');
			$bride_req_coupled_seminar_db;
			if($bride_req_coupled_seminar){
				$bride_req_coupled_seminar_db = $bride_req_coupled_seminar;
			}else{
				$bride_req_coupled_seminar_db = NULL;
			}
			$bride_req_cenomar = $this->input->post('bride_req_cenomar');
			$bride_req_cenomar_db;
			if($bride_req_cenomar){
				$bride_req_cenomar_db = $bride_req_cenomar;
			}else{
				$bride_req_cenomar_db = NULL;
			}
			$bride_req = array(
					'bride_id' => $bride_id,
					'bride_req_marriage_license_released' => $this->input->post('bride_req_marriage_license_released'),
					'bride_req_marriage_license_submitted' => $this->input->post('bride_req_marriage_license_submitted'),
					'bride_req_marriage_contract' => $this->input->post('bride_req_marriage_contract'),
					'bride_req_baptismal_marriage' => $this->input->post('bride_req_baptismal_marriage'),
					'bride_req_confirmation_ar_number' => $this->input->post('bride_req_confirmation_ar_number'),
					'bride_req_request_permission' => $this->input->post('bride_req_request_permission'),
					'bride_req_banns' => $this->input->post('bride_req_banns'),
					'bride_req_sponsor_w_address' => $this->input->post('bride_req_sponsor_w_address'),
					'bride_req_coupled_seminar' => $bride_req_coupled_seminar_db,
					'bride_req_cenomar' => $bride_req_cenomar_db,
					'bride_req_confession' => $this->input->post('bride_req_confession'),
					'bride_req_baranggay_clearance' => $this->input->post('bride_req_baranggay_clearance'),
					'bride_req_baranggay_church_ar_no' => $this->input->post('bride_req_baranggay_church_ar_no'),
				);
			$this->db->insert('bride_requirements', $bride_req);


			$broom_req_coupled_seminar = $this->input->post('broom_req_coupled_seminar');
			$broom_req_coupled_seminar_db;
			if($broom_req_coupled_seminar){
				$broom_req_coupled_seminar_db = $broom_req_coupled_seminar;
			}else{
				$broom_req_coupled_seminar_db = NULL;
			}
			$broom_req_cenomar = $this->input->post('broom_req_cenomar');
			$broom_req_cenomar_db;
			if($broom_req_cenomar){
				$broom_req_cenomar_db = $broom_req_cenomar;
			}else{
				$broom_req_cenomar_db = NULL;
			}
			$broom_req = array(
					'broom_id' => $broom_id,
					'broom_req_marriage_license_released' => $this->input->post('broom_req_marriage_license_released'),
					'broom_req_marriage_license_submitted' => $this->input->post('broom_req_marriage_license_submitted'),
					'broom_req_marriage_contract' => $this->input->post('broom_req_marriage_contract'),
					'broom_req_baptismal_marriage' => $this->input->post('broom_req_baptismal_marriage'),
					'broom_req_confirmation_ar_number' => $this->input->post('broom_req_confirmation_ar_number'),
					'broom_req_request_permission' => $this->input->post('broom_req_request_permission'),
					'broom_req_banns' => $this->input->post('broom_req_banns'),
					'broom_req_sponsor_w_address' => $this->input->post('broom_req_sponsor_w_address'),
					'broom_req_coupled_seminar' => $broom_req_coupled_seminar_db,
					'broom_req_cenomar' => $broom_req_cenomar_db,
					'broom_req_confession' => $this->input->post('broom_req_confession'),
					'broom_req_baranggay_clearance' => $this->input->post('broom_req_baranggay_clearance'),
					'broom_req_baranggay_church_ar_no' => $this->input->post('broom_req_baranggay_church_ar_no'),
				);
			$this->db->insert('broom_requirements', $broom_req);
			$date = $this->input->post('date');
			$time = $this->input->post('time');
			$chk_time = $this->time_m->check_time($date, $time);
			if($chk_time == 0){
				$marriage = array(
						'bride_id' => $bride_id,
						'broom_id' => $broom_id,
						'date' => $this->input->post('date'),
						'time' => $this->input->post('time'),
						'end_time' => $this->input->post('end_time'),
						'priest' => $this->input->post('name_of_priest')
					);
				if($this->db->insert('marriage', $marriage)){
					redirect('marriage');
				}
			}else{
				echo "<script>alert('Date and Time already taken.');</script>";
			}
		}
		$this->data['date'] = $date;
		$this->data['subview'] = 'marriage/add';
		$this->load->view('_layout_main', $this->data);
	}
	public function edit($marriage_id, $bride_id, $broom_id){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$bride_id;
			$broom_id;
			$bride_father_occupation;
			if($this->input->post('bride_father_occupation')){
				$bride_father_occupation = $this->input->post('bride_father_occupation');
			}else{
				$bride_father_occupation = $this->input->post('bride_father_occupation_deceased');
			}
			if($this->input->post('bride_mother_occupation')){
				$bride_mother_occupation = $this->input->post('bride_mother_occupation');
			}else{
				$bride_mother_occupation = $this->input->post('bride_mother_occupation_deceased');
			}
			$bride = array(
					'bride_pob' => $this->input->post('bride_pob'),
					'bride_name' => $this->input->post('bride_name'),
					'bride_citizenship' => $this->input->post('bride_citizenship'),
					'bride_religion' => $this->input->post('bride_religion'),
					'bride_birthday' => $this->input->post('bride_birthday'),
					'bride_address' => $this->input->post('bride_address'),
					'bride_contact' => $this->input->post('bride_contact'),
					'bride_occupation' => $this->input->post('bride_occupation'),
					'bride_father' => $this->input->post('bride_father'),
					'bride_father_occupation' => $bride_father_occupation,
					'bride_mother' => $this->input->post('bride_mother'),
					'bride_mother_occupation' => $bride_mother_occupation,
				);
			$this->db->where('id', $bride_id);
			$this->db->update('bride_info', $bride);
			$broom_father_occupation;
			if($this->input->post('broom_father_occupation')){
				$broom_father_occupation = $this->input->post('broom_father_occupation');
			}else{
				$broom_father_occupation = $this->input->post('broom_father_occupation_deceased');
			}
			$broom_mother_occupation;
			if($this->input->post('broom_mother_occupation')){
				$broom_mother_occupation = $this->input->post('broom_mother_occupation');
			}else{
				$broom_mother_occupation = $this->input->post('broom_mother_occupation_deceased');
			}
			$broom = array(
					'broom_name' => $this->input->post('broom_name'),
					'broom_pob' => $this->input->post('broom_pob'),
					'broom_citizenship' => $this->input->post('broom_citizenship'),
					'broom_religion' => $this->input->post('broom_religion'),
					'broom_birthday' => $this->input->post('broom_birthday'),
					'broom_address' => $this->input->post('broom_address'),
					'broom_contact' => $this->input->post('broom_contact'),
					'broom_occupation' => $this->input->post('broom_occupation'),
					'broom_father' => $this->input->post('broom_father'),
					'broom_father_occupation' => $broom_father_occupation,
					'broom_mother' => $this->input->post('broom_mother'),
					'broom_mother_occupation' => $broom_mother_occupation,
				);
			$this->db->where('id', $broom_id);
			$this->db->update('broom_info', $broom);

			//requirements
			$bride_req = array(
					'bride_req_marriage_license_released' => $this->input->post('bride_req_marriage_license_released'),
					'bride_req_marriage_license_submitted' => $this->input->post('bride_req_marriage_license_submitted'),
					'bride_req_marriage_contract' => $this->input->post('bride_req_marriage_contract'),
					'bride_req_baptismal_marriage' => $this->input->post('bride_req_baptismal_marriage'),
					'bride_req_confirmation_ar_number' => $this->input->post('bride_req_confirmation_ar_number'),
					'bride_req_request_permission' => $this->input->post('bride_req_request_permission'),
					'bride_req_banns' => $this->input->post('bride_req_banns'),
					'bride_req_sponsor_w_address' => $this->input->post('bride_req_sponsor_w_address'),
					'bride_req_coupled_seminar' => $this->input->post('bride_req_coupled_seminar'),
					'bride_req_cenomar' => $this->input->post('bride_req_cenomar'),
					'bride_req_confession' => $this->input->post('bride_req_confession'),
					'bride_req_baranggay_clearance' => $this->input->post('bride_req_baranggay_clearance'),
					'bride_req_baranggay_church_ar_no' => $this->input->post('bride_req_baranggay_church_ar_no'),
				);

			$this->db->where('bride_id', $bride_id);
			$this->db->update('bride_requirements', $bride_req);

			$broom_req = array(
					'broom_req_marriage_license_released' => $this->input->post('broom_req_marriage_license_released'),
					'broom_req_marriage_license_submitted' => $this->input->post('broom_req_marriage_license_submitted'),
					'broom_req_marriage_contract' => $this->input->post('broom_req_marriage_contract'),
					'broom_req_baptismal_marriage' => $this->input->post('broom_req_baptismal_marriage'),
					'broom_req_confirmation_ar_number' => $this->input->post('broom_req_confirmation_ar_number'),
					'broom_req_request_permission' => $this->input->post('broom_req_request_permission'),
					'broom_req_banns' => $this->input->post('broom_req_banns'),
					'broom_req_sponsor_w_address' => $this->input->post('broom_req_sponsor_w_address'),
					'broom_req_coupled_seminar' => $this->input->post('broom_req_coupled_seminar'),
					'broom_req_cenomar' => $this->input->post('broom_req_cenomar'),
					'broom_req_confession' => $this->input->post('broom_req_confession'),
					'broom_req_baranggay_clearance' => $this->input->post('broom_req_baranggay_clearance'),
					'broom_req_baranggay_church_ar_no' => $this->input->post('broom_req_baranggay_church_ar_no'),
				);
			$this->db->where('broom_id', $broom_id);
			$this->db->update('broom_requirements', $broom_req);

			$marriage = array(
					'date' => $this->input->post('date'),
					'time' => $this->input->post('time'),
					'end_time' => $this->input->post('end_time'),
					'priest' => $this->input->post('name_of_priest')
				);
			$this->db->where('id', $marriage_id);
			if($this->db->update('marriage', $marriage)){
				redirect('marriage');
			}
		}
		$this->data['bride'] = $this->marriage_m->get_bride($bride_id);
		$this->data['broom'] = $this->marriage_m->get_broom($broom_id);
		$this->data['bride_req'] = $this->marriage_m->get_bride_req($bride_id);
		$this->data['broom_req'] = $this->marriage_m->get_broom_req($broom_id);
		$this->data['marriage'] = $this->marriage_m->get_by_id($marriage_id);
		$this->data['subview'] = 'marriage/edit';
		$this->load->view('_layout_main', $this->data);
	}
	public function view($marriage_id, $bride_id, $broom_id){
		$this->data['bride'] = $this->marriage_m->get_bride($bride_id);
		$this->data['broom'] = $this->marriage_m->get_broom($broom_id);
		$this->data['bride_req'] = $this->marriage_m->get_bride_req($bride_id);
		$this->data['broom_req'] = $this->marriage_m->get_broom_req($broom_id);
		$this->data['marriage'] = $this->marriage_m->get_by_id($marriage_id);
		$this->data['marriage_id'] = $marriage_id;
		$this->data['bride_id'] = $bride_id;
		$this->data['broom_id'] = $broom_id;
		$this->data['subview'] = 'marriage/view';
		$this->load->view('_layout_main', $this->data);
	}
	public function deactivate($id){
		$data = array(
				'isActive' => 0
			);
		$this->db->where('id', $id);
		$this->db->limit(1);
		if($this->db->update('marriage', $data)){
			redirect('marriage');
		}
	}
	// public function update($id){
	// 	$data = array(
	// 			'remarks' => $this->input->post('remarks')
	// 		);
	// 	$this->db->where('id', $id);
	// 	if($this->db->update('marriage', $data)){
	// 		redirect('marriage');
	// 	}

	// }
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

	     $events = $this->marriage_m->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {
	     	$check_requirement;
	     	if($this->marriage_m->check_bride_requirements($r->id, $r->bride_id) + $this->marriage_m->check_groom_requirements($r->id, $r->broom_id) == 2){
	     		$check_requirement = 'Incomplete';
	     	}else{
	     		$check_requirement = 'Complete';
	     	}
	     	$broom = $this->marriage_m->get_broom($r->broom_id);
	     	$bride = $this->marriage_m->get_bride($r->bride_id);
	         $data_events[] = array(
	             "id" => $r->id,
	             "title" => $broom->broom_name .' and ' . $bride->bride_name . ' Wedding' . ' (' . $r->status . ')',
	             "end" => date('Y-m-d', strtotime($r->date. ' + 1 day')),
	             "start" => $r->date,
	             "slug" => 'marriage',
	             'bride_id' => $r->bride_id,
	             'broom_id' => $r->broom_id,

	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     exit();
	 }
}
?>